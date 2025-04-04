<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warranty;
use App\Models\Product;

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
    public function deleteWarranty($id)
{
    $warranty = Warranty::findOrFail($id);

    // Find related product by product_code
    $product = Product::where('code', $warranty->product_code)->first();

    if ($product) {
        $product->delete();
    }

    $warranty->delete();

    return redirect()->route('admin.warranties')->with('success', 'Warranty and related product deleted successfully.');
}
}
