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

    public function adminNewService(){
        $section = 'services__add';
        return view('admin.dashboard', compact('section'));
    }
}
