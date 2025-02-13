<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;
class AdminProductsController extends Controller
{
    public function adminProducts(Request $request)
    {
        $query = Product::query();

        if ($request->has('type') && $request->query('type') !== '') {
            $type = $request->query('type');
            $query->where('type', $type);
        }
        if ($request->has('country') && $request->query('country') !== '') {
            $country = $request->query('country');
            $query->where('country', $country);
        } 

        if ($request->has('sort_by_date') && $request->query('sort_by_date') !== '') {
            $sortByDate = $request->query('sort_by_date');
            $query->orderBy('verification_date', $sortByDate);
        }

        if ($request->has('has_warranty') && $request->query('has_warranty') !== '') {
            $hasWarranty = $request->query('has_warranty');
            if ($hasWarranty == '1') {
                $query->whereNotNull('warranty');
            } else {
                $query->whereNull('warranty');
            }
        }

        $products = $query->paginate(20);
        $section = 'products';

        return view('admin.dashboard', compact('section', 'products'));
    }
    public function adminProductAdd(Request $request){
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
            'type' => $productTypes[$typePrefix], // Convert prefix to type ID
            'country' => $countrySuffix,
            'verification_date' => null,
            'warranty' => null,
            'service_id' => null,
        ]);

        $addedProducts[] = $product->code;
    }

    if (count($addedProducts) > 0) {
        return redirect()->route('admin.add_product')->with('success', count($addedProducts) . ' products added successfully.');
    } else {
        return redirect()->route('admin.add_product')->with('error', 'No valid products were added.');
    }
}

}
