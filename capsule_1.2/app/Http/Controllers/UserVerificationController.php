<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warranty;

class UserVerificationController extends Controller
{
    public function checkuser(Request $request)
    {
        $request->validate([
            'client_number' => 'required|string'
        ]);
    
        // Check if warranty exists
        $warranty = Warranty::where('client_number', $request->client_number)->first();
    
        if ($warranty) {
            return response()->json([
                'exists' => true,
                'message' => 'Warranty found!',
                'warranty_link' => route('service.warranty', ['id' => $warranty->id]) // ✅ Returns warranty link
            ]);
        }
    
        return response()->json([
            'exists' => false,
            'message' => 'No warranty found for this number.'
        ]);
    }
    
}
