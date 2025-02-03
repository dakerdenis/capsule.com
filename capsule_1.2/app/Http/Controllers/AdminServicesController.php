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

    public function adminAddService()
    {
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
            $logoPath = 'images/services/' . $file->getClientOriginalName();
            $file->move(public_path('images/services'), $file->getClientOriginalName());
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
    public function adminDeleteService($id)
    {
        $service = Service::findOrFail($id);

        // Delete the logo if it exists
        if ($service->logo && file_exists(public_path($service->logo))) {
            unlink(public_path($service->logo));
        }

        // Delete the service
        $service->delete();

        return redirect()->route('admin.services')->with('success', 'Service deleted successfully.');
    }

    public function adminEditService($id)
    {
        $service = Service::findOrFail($id); // Fetch the service by ID
        $section = 'services__edit';
        return view('admin.dashboard', compact('section', 'service'));
    }

    public function adminPostEditService(Request $request, $id)
    {
        $service = Service::findOrFail($id);
    
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'email' => 'required|email|unique:services,email,' . $service->id,
            'password' => 'nullable|string|min:6', // Password can be nullable for no change
            'logo' => 'nullable|image|max:2048', // Image validation (max size 2MB)
        ]);
    
        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete the old logo if it exists
            if ($service->logo && file_exists(public_path($service->logo))) {
                unlink(public_path($service->logo));
            }
    
            $file = $request->file('logo');
            $logoPath = 'images/services/' . $file->getClientOriginalName();
            $file->move(public_path('images/services'), $file->getClientOriginalName());
            $service->logo = $logoPath;
        }
    
        // Update service details
        $service->name = $request->name;
        $service->description = $request->description;
        $service->email = $request->email;
    
        // Update password only if provided
        if ($request->filled('password')) {
            $service->password = bcrypt($request->password);
        }
    
        // Handle cooperation field
        $service->cooperation = $request->has('cooperation') ? 1 : 0;
    
        $service->save();
    
        return redirect()->route('admin.services')->with('success', 'Service updated successfully.');
    }
    
}
