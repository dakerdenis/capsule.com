<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Warranty;
use Barryvdh\DomPDF\Facade\Pdf;

class WarrantyController extends Controller
{
    public function warrantyPage()
    {
        return view('warranty.warranty');
    }

    public function warrantyLogin(Request $request)
    {
        \Log::info('Received Login Request:', $request->all());
    
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'product_code' => 'required|string',
        ]);
    
        $product = Product::where('code', $request->product_code)->first();
    
        if (!$product) {
            return back()->withErrors(['product_code' => 'The product code does not exist in our database.']);
        }
    
        $service = \App\Models\Service::where('email', $request->email)->first();
    
        if (!$service) {
            \Log::error('Email not found:', ['email' => $request->email]);
            return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
        }
    
        // Check if service has cooperation permission
        if (!$service->cooperation) {
            \Log::error('Service does not have cooperation permission:', ['email' => $request->email]);
            return back()->withErrors(['email' => 'You do not have permission to log in.']);
        }
    
        // Manual password check
        if (!Hash::check($request->password, $service->password)) {
            \Log::error('Password mismatch:', [
                'plain_password' => $request->password,
                'hashed_password' => $service->password,
            ]);
            return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
        }
    
        // Authenticate service and set session flag
        if (Auth::guard('service')->attempt($request->only('email', 'password'))) {
            \Log::info('Login successful for:', ['email' => $request->email]);
    
            // Store product code in the session for use in /warranty/register
            session(['product_code' => $request->product_code]);
            session(['accessed_register' => false]); // Allow access to /warranty/register
    
            return redirect()->route('service.register');
        }
    
        \Log::error('Authentication failed for:', ['email' => $request->email]);
        return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
    }
    
    
    

    public function warrantyregister()
    {
        $service = Auth::guard('service')->user();
    
        // Retrieve product code from session
        $productCode = session('product_code');
    
        if (!$productCode) {
            return redirect()->route('warranty')->withErrors(['error' => 'Product code not found. Please log in again.']);
        }
    
        $product = Product::where('code', $productCode)->first();
    
        if (!$product) {
            return redirect()->route('warranty')->withErrors(['error' => 'Product not found. Please log in again.']);
        }
    
        // System-generated values
        $installationDate = now()->format('Y-m-d');
        $clientCode = strtoupper(bin2hex(random_bytes(6)) . rand(1, 9)); // 13-char alphanumeric
    
        // Fetch warranty and lifespan dynamically
        $filmModel = $this->getFilmModel($product->type);
        $warrantyPeriod = $this->getWarrantyPeriod($product->type);
        $serviceLife = $this->getServiceLife($product->type);
        $warrantyEndDate = now()->addYears($warrantyPeriod)->format('Y-m-d');
    
        session(['accessed_register' => true]);
    
        return view('warranty.register', compact(
            'service', 'productCode', 'installationDate', 'clientCode',
            'filmModel', 'warrantyPeriod', 'serviceLife', 'warrantyEndDate'
        ));
    }
    
    public function warrantyPostRegister(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_phone' => 'required|string|max:15',
            'car_model' => 'required|string|max:255',
            'car_make' => 'required|string|max:255',
            'car_color' => 'required|string|max:50',
            'car_year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'license_plate' => 'required|string|max:20',
            'manager_name' => 'required|string|max:255',
            'installation_photos.*' => 'nullable|image|max:2048',
        ]);
    
        // Handle file uploads
        $uploadedPhotos = [];
        if ($request->hasFile('installation_photos')) {
            foreach ($request->file('installation_photos') as $photo) {
                $filePath = $photo->store('warranty_photos', 'public');
                $uploadedPhotos[] = $filePath;
            }
        }
    
        // Get the authenticated service
        $service = Auth::guard('service')->user();
    
        // Retrieve product code from session
        $productCode = session('product_code');
    
        $product = Product::where('code', $productCode)->first();
        if (!$product) {
            return redirect()->route('warranty')->withErrors(['error' => 'Product not found. Please log in again.']);
        }
    
        // Create a new warranty record
        $warranty = \App\Models\Warranty::create([
            'client_name' => $request->input('client_name'),
            'client_number' => $request->input('client_phone'),
            'car_model' => $request->input('car_model'),
            'car_make' => $request->input('car_make'),
            'car_color' => $request->input('car_color'),
            'manufacture_year' => $request->input('car_year'),
            'license_plate_number' => $request->input('license_plate'),
            'service_id' => $service->id, // Add the authenticated service ID here
            'master_name' => $request->input('manager_name'),
            'service_phone_number' => $service->phone,
            'product_code' => $productCode, // Store the product code
            'installation_date' => $request->input('installation_date'),
            'brand_name' => $request->input('brand_name'),
            'film_model' => $request->input('film_model'),
            'warranty_model' => $request->input('warranty_period') . ' Years',
            'service_life' => $request->input('service_life') . ' Years',
            'warranty_end_date' => $request->input('warranty_end_date'),
            'client_code' => $request->input('client_code'),
            'images_array' => $uploadedPhotos,
        ]);
    
        // Update the product record
        $product->update([
            'warranty' => $warranty->id,
            'service_id' => $service->id,
        ]);
    
        return redirect()->route('warranty')->with('success', 'Warranty successfully registered.');
    }
    
    public function singleWarranty($id)
    {
        // Fetch warranty data along with the service relationship
        $warranty = Warranty::with('service')->findOrFail($id);

        return view('warranty.show', compact('warranty'));
    }

    public function generatePdf($id)
{
    // Fetch the warranty data
    $warranty = Warranty::findOrFail($id);

    // Pass data to the view
    $pdf = Pdf::loadView('warranty.single_warranty_pdf', compact('warranty'));

    // Download the generated PDF
    return $pdf->download('warranty_' . $warranty->id . '.pdf');
}
    
    private function getFilmModel($type)
    {
        return [
            1 => 'Urban',
            2 => 'Optima',
            3 => 'Element',
            4 => 'Huracan',
            5 => 'Matte',
            6 => 'Black',
        ][$type] ?? 'Unknown';
    }
    
    private function getWarrantyPeriod($type)
    {
        return [
            1 => 3, // Urban
            2 => 3, // Optima
            3 => 5, // Element
            4 => 5, // Huracan
            5 => 3, // Matte
            6 => 3, // Black
        ][$type] ?? 0; // Default to 0 if type not found
    }
    
    private function getServiceLife($type)
    {
        return [
            1 => 5, // Urban
            2 => 5, // Optima
            3 => 8, // Element
            4 => 8, // Huracan
            5 => 6, // Matte
            6 => 5, // Black
        ][$type] ?? 0; // Default to 0 if type not found
    }
     
}
