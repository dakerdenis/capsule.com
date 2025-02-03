<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;
class AdminServicesController extends Controller
{
    public function adminServices()
    {
        $services = Service::all();
        $section = 'services';

        return view('admin.dashboard', compact('section', 'services'));
    }  
      public function adminSingleService($id)
    {
        $service = Service::findOrFail($id); // Fetch the service by ID or fail with a 404
        $section = 'single_service';
    
        return view('admin.dashboard', compact('section', 'service'));
    }

    public function adminAddService(){
        $section = 'services__add';
        return view('admin.dashboard', compact('section'));
    }
    public function adminPostAddService(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'email' => 'required|email|unique:services,email',
            'password' => 'required|string|min:6',
            'logo' => 'nullable|image|max:2048', // Image validation (max size 2MB)
        ]);
    
        // Handle the logo upload
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $logoPath = 'images/' . $file->getClientOriginalName();
            $file->move(public_path('images'), $file->getClientOriginalName());
        }
    
        // Create the service
        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'logo' => $logoPath, // Save the relative path to the logo
        ]);
    
        return redirect()->route('admin.services')->with('success', 'Service added successfully.');
    }
    
}
