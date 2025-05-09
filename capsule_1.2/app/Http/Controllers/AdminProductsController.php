<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;
use App\Models\Warranty;
use Illuminate\Support\Facades\Log; // <-- Add this
use Illuminate\Support\Facades\Http;
class AdminProductsController extends Controller
{

    public function adminProducts(Request $request)
    {
        $query = Product::query();
        
        if ($request->has('search') && $request->search !== '') {
            $query->where('code', 'like', '%' . $request->search . '%');
        }
        
        if ($request->has('type') && $request->query('type') !== '') {
            $type = (int) $request->query('type'); // Ensure it's an integer
            $query->where('type', $type);
        }

        if ($request->has('country') && $request->query('country') !== '') {
            $country = $request->query('country');
            $query->where('country', $country);
        }

        // Validate sorting order and apply sorting only if valid
        if ($request->has('sort_by_date')) {
            $sortByDate = $request->query('sort_by_date');

            if (in_array($sortByDate, ['asc', 'desc'])) {
                $query->orderBy('verification_date', $sortByDate);
            }
        }

        if ($request->has('has_warranty') && $request->query('has_warranty') !== '') {
            $hasWarranty = $request->query('has_warranty');

            if ($hasWarranty == '1') {
                $query->whereNotNull('warranty');
            } elseif ($hasWarranty == '0') {
                $query->whereNull('warranty');
            }
        }

        $products = $query
            ->orderByRaw('FIELD(status, 1, 0, 2)') // Сортировка: active, added, expired
            ->paginate(20);

        $section = 'products';

        return view('admin.dashboard', compact('section', 'products'));
    }


    public function adminProductAdd(Request $request)
    {
        $section = 'products__add';
        return view('admin.dashboard', compact('section'));
    }

    public function adminPostProductAdd(Request $request)
    {
        $request->validate([
            'product_codes' => 'required|string',
        ]);

        $codes = explode("\n", trim($request->product_codes)); // Split by new lines
        $codes = array_map('trim', $codes); // Trim each code

        // Define mapping for product types
        $productTypes = [
            'UR' => 1, // Urban
            'OP' => 2, // Optima
            'EL' => 3, // Element
            'HU' => 4, // Huracan
            'MA' => 5, // Matte
            'BL' => 6, // Black
        ];

        // Define valid countries
        $validCountries = ['AZ', 'US', 'EU'];

        $addedProducts = [];

        foreach ($codes as $code) {
            if (strlen($code) < 4) {
                continue; // Skip invalid codes
            }

            $typePrefix = substr($code, 0, 2); // Extract first 2 letters
            $countrySuffix = substr($code, -2); // Extract last 2 letters

            if (!isset($productTypes[$typePrefix]) || !in_array($countrySuffix, $validCountries)) {
                continue; // Skip invalid product codes
            }

            // Create new product
            $product = Product::create([
                'code' => $code,
                'type' => $productTypes[$typePrefix],
                'country' => $countrySuffix,
                'verification_date' => null,
                'warranty' => null,
                'service_id' => null,
                'is_active' => false,
                'activation_expires_at' => null,
                'status' => Product::STATUS_ADDED, // <-- новое поле
            ]);

            $addedProducts[] = $product->code;
        }

        if (count($addedProducts) > 0) {
            return redirect()->route('admin.add_product')->with('success', count($addedProducts) . ' products added successfully.');
        } else {
            return redirect()->route('admin.add_product')->with('error', 'No valid products were added.');
        }
    }

    public function adminDeleteProduct($id)
    {
        $product = Product::findOrFail($id);

        if ($product->warranty) {
            return redirect()->back()->with('error', 'Cannot delete product with an active warranty.');
        }

        $product->delete();

        return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
    }

    public function adminSellProductPage()
    {
        $services = Service::where('cooperation', true)->get(); // Только те, у кого cooperation = 1
        $section = 'sell_products';
        return view('admin.dashboard', compact('section', 'services'));
    }

    public function adminSellProductPost(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'service_id' => 'required|exists:services,id',
            'duration_hours' => 'required|integer|min:1|max:120'
        ]);

        $code = trim($request->code);
        $serviceId = $request->service_id;
        $expiresAt = now()->addHours((int) $request->duration_hours);


        $product = Product::where('code', $code)->first();

        if (!$product) {
            return back()->with('error', 'Продукт с таким кодом не найден.');
        }

        $product->update([
            'service_id' => $serviceId,
            'activation_expires_at' => $expiresAt,
            'status' => Product::STATUS_ACTIVE,
        ]);
        $service = Service::find($serviceId);
        if ($service && $service->phone) {
            $message = "You have {$request->duration_hours} hours to make warranty with product code(s)";
            $this->sendSmsNotification($service->phone, $message);
        }
        
        return redirect()->route('admin.products')->with('success', 'Продукт успешно добавлен в продажу.');

    }

    public function adminDeactivateProduct($id)
    {
        $product = Product::findOrFail($id);

        if ($product->warranty) {
            return redirect()->back()->with('error', 'Cannot deactivate product with active warranty.');
        }

        $product->update([
            'status' => Product::STATUS_EXPIRED,
            'activation_expires_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Product deactivated successfully.');
    }

    public function updateProductStatus(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($product->warranty) {
            return redirect()->back()->with('error', 'Cannot change status of a product with warranty.');
        }

        $request->validate([
            'status' => 'required|in:0,1,2',
        ]);

        $product->status = (int)$request->status;
        $product->save();

        return redirect()->back()->with('success', 'Product status updated.');
    }




    private function sendSmsNotification($clientPhone, $message)
    {
        $apiUrl = "https://sms.atatexnologiya.az/bulksms/api";
        $apiLogin = "Capsule";
        $apiPassword = "db8Q#5@H!1R";
        $title = "CAPSULE PPF";
        $controlId = time() . rand(1000, 9999); // Unique ID

        $xmlData = "<?xml version='1.0' encoding='UTF-8'?>
            <request>
                <head>
                    <operation>submit</operation>
                    <login>{$apiLogin}</login>
                    <password>{$apiPassword}</password>
                    <title>{$title}</title>
                    <scheduled>now</scheduled>
                    <isbulk>false</isbulk>
                    <controlid>{$controlId}</controlid>
                </head>
                <body>
                    <msisdn>{$clientPhone}</msisdn>
                    <message>{$message}</message>
                </body>
            </request>";

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/xml',
            ])->withBody($xmlData, 'application/xml')
                ->withOptions(['verify' => false])
                ->post($apiUrl);

            Log::info('SMS API Request:', ['xml' => $xmlData]);
            Log::info('SMS API Response:', ['response' => $response->body()]);

            if (strpos($response->body(), '<responsecode>000</responsecode>') !== false) {
                return true;
            } else {
                Log::error('SMS sending failed', ['response' => $response->body()]);
                return false;
            }
        } catch (\Exception $e) {
            Log::error('SMS API Error: ' . $e->getMessage());
            return false;
        }
    }
}
