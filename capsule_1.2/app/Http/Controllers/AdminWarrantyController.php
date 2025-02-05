<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warranty;

class AdminWarrantyController extends Controller
{
    public function adminWarranties()
    {
        // Fetch all warranties and eager load the service relationship
        $warranties = Warranty::with('service')->get();
        $section = 'warranties';

        return view('admin.dashboard', compact('section', 'warranties'));
    }

    public function adminSingleWarranty($id)
    {
        // Fetch a single warranty with the service relationship
        $warranty = Warranty::with('service')->findOrFail($id);
        $section = 'single_warranty';

        return view('admin.dashboard', compact('section', 'warranty'));
    }
}
