<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductVerificationController extends Controller
{
    public function verifyProduct(Request $request)
    {
        $request->validate([
            'product_code' => 'required|string',
        ]);

        // Check if the product exists in the database
        $product = Product::where('code', $request->input('product_code'))->first();

        if ($product) {
            return response()->json([
                'success' => true,
                'message' => 'Product found.',
                'product' => $product,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Product not found.',
        ]);
    }
}
