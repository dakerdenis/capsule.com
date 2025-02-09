<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Warranty;
use Barryvdh\DomPDF\Facade\Pdf;
use Intervention\Image\Facades\Image;

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
        \Log::info('Starting warranty registration process.');
    
        // Validate input
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_phone' => 'required|string|max:15',
            'car_model' => 'required|string|max:255',
            'car_make' => 'required|string|max:255',
            'car_color' => 'required|string|max:50',
            'car_year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'license_plate' => 'required|string|max:20',
            'manager_name' => 'required|string|max:255',
            'installation_photos' => 'required|array|min:1', // Ensure at least one photo
            'installation_photos.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048', // Max size per photo: 2MB
        ]);
    
        Log::info('Validation passed for warranty registration.');
    
        // Handle photo uploads
        $uploadedPhotos = [];
        $watermarkPath = public_path('images/logo_main.png');
    
        Log::info('Watermark path: ' . $watermarkPath);
    
        foreach ($request->file('installation_photos') as $photo) {
            Log::info('Processing photo: ' . $photo->getClientOriginalName());
    
            try {
                // Process the image
                $image = Image::make($photo->getRealPath());
    
                // Resize the image to a maximum of 400KB
                $image->encode('jpg', 85); // Initial compression
                while (strlen($image->encode()) > 400 * 1024) { // If size > 400KB, reduce quality further
                    $image->encode('jpg', $image->quality() - 10);
                }
    
                // Add watermark
                $image->insert($watermarkPath, 'bottom-right', 10, 10);
    
                // Generate a unique name and save
                $fileName = uniqid() . '.jpg';
                $filePath = public_path('images/warranty_photos/' . $fileName);
    
                Log::info('Saving photo to: ' . $filePath);
    
                // Ensure directory exists
                if (!file_exists(public_path('images/warranty_photos'))) {
                    mkdir(public_path('images/warranty_photos'), 0775, true);
                    Log::info('Created directory: ' . public_path('images/warranty_photos'));
                }
    
                $image->save($filePath);
                $uploadedPhotos[] = 'images/warranty_photos/' . $fileName;
    
                Log::info('Photo saved successfully: ' . $fileName);
            } catch (\Exception $e) {
                Log::error('Error processing photo: ' . $photo->getClientOriginalName() . ' - ' . $e->getMessage());
            }
        }
    
        Log::info('Uploaded photos: ' . json_encode($uploadedPhotos));
    
        // Check if at least one photo was uploaded
        if (count($uploadedPhotos) < 1) {
            Log::error('No photos were successfully uploaded.');
            return back()->withErrors(['installation_photos' => 'Failed to upload photos.']);
        }
    
        // Create warranty record
        try {
            Warranty::create([
                'client_name' => $request->client_name,
                'client_number' => $request->client_phone,
                'car_model' => $request->car_model,
                'car_make' => $request->car_make,
                'car_color' => $request->car_color,
                'manufacture_year' => $request->car_year,
                'license_plate_number' => $request->license_plate,
                'service_id' => Auth::guard('service')->id(), // Assuming service is logged in
                'master_name' => $request->manager_name,
                'service_phone_number' => Auth::guard('service')->user()->phone,
                'service_country' => Auth::guard('service')->user()->country,
                'service_city' => Auth::guard('service')->user()->city,
                'product_code' => session('product_code'),
                'installation_date' => now(),
                'brand_name' => 'Capsule', // Assuming static value
                'film_model' => $request->film_model ?? 'Default',
                'warranty_model' => $request->warranty_period ?? 'Default',
                'service_life' => $request->service_life ?? 'Default',
                'warranty_end_date' => now()->addYears(5), // Assuming static value
                'client_code' => strtoupper(bin2hex(random_bytes(6)) . rand(1, 9)),
                'images_array' => json_encode($uploadedPhotos),
            ]);
    
            Log::info('Warranty record created successfully.');
            return redirect()->route('service.success')->with('success', 'Warranty successfully registered.');
        } catch (\Exception $e) {
            Log::error('Error creating warranty: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to create warranty.']);
        }
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
