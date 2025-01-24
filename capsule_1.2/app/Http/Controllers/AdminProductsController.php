<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;
class AdminProductsController extends Controller
{
    public function adminProducts(Request $request)
    {
        $query = Product::query();

        if ($request->has('type') && $request->query('type') !== '') {
            $type = $request->query('type');
            $query->where('type', $type);
        }

        if ($request->has('sort_by_date') && $request->query('sort_by_date') !== '') {
            $sortByDate = $request->query('sort_by_date');
            $query->orderBy('verification_date', $sortByDate);
        }

        if ($request->has('has_warranty') && $request->query('has_warranty') !== '') {
            $hasWarranty = $request->query('has_warranty');
            if ($hasWarranty == '1') {
                $query->whereNotNull('warranty');
            } else {
                $query->whereNull('warranty');
            }
        }

        $products = $query->paginate(20);
        $section = 'products';

        return view('admin.dashboard', compact('section', 'products'));
    }
}
