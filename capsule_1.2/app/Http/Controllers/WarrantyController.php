<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

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
    
        // Manual password check for debugging
        if (!Hash::check($request->password, $service->password)) {
            \Log::error('Manual Password Check Failed for:', ['email' => $request->email]);
            return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
        }
    
        // Proceed with guard authentication
        if (Auth::guard('service')->attempt($request->only('email', 'password'))) {
            \Log::info('Login successful for:', ['email' => $request->email]);
            return redirect()->route('service.register');
        }
    
        \Log::error('Authentication failed for:', ['email' => $request->email]);
        return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
    }
    
    public function warrantyregister()
{
    return view('warranty.register');
}

}
