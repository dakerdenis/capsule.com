<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminWarrantyController extends Controller
{
    public function adminWarranties()
    {
        $warranties = []; // Load warranty data as needed
        $section = 'warranties';

        return view('admin.dashboard', compact('section', 'warranties'));
    }

    public function adminSingleWarranty($id)
    {
        $warranty = []; // Load single warranty data as needed
        $section = 'single_warranty';

        return view('admin.dashboard', compact('section', 'warranty'));
    }
}
