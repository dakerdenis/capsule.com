<?php

namespace App\Http\Controllers;

use App\Models\Warranty;
use Illuminate\Http\Request;

class AdminWarrantyController extends Controller
{
    public function adminWarranties()
    {
        // Fetch warranties with related services
        $warranties = Warranty::with('service')->get();
        $section = 'warranties';

        return view('admin.dashboard', compact('section', 'warranties'));
    }

    public function adminSingleWarranty($id)
    {
        $warranty = Warranty::with('service')->findOrFail($id); // Load single warranty with related service
        $section = 'single_warranty';

        return view('admin.dashboard', compact('section', 'warranty'));
    }
}
