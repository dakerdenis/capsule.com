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
            // Increment the verification counter
            $product->increment('verification_counter'); // ✅ Increase by 1
    
            // Map product types to their names
            $productTypes = [
                1 => 'Urban',
                2 => 'Optima',
                3 => 'Element',
                4 => 'Huracan',
                5 => 'Matte',
                6 => 'Black',
            ];
    
            // Add the mapped type name to the response
            $product->model_name = $productTypes[$product->type] ?? 'Unknown';
    
            return response()->json([
                'success' => true,
                'message' => 'Product found and verification counter updated.',
                'product' => $product,
            ]);
        }
    
        return response()->json([
            'success' => false,
            'message' => 'Product not found.',
        ]);
    }
    
    
}
