<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class WarrantyDocumentController extends Controller
{
    public function uploadDocument(Request $request)
    {
        \Log::info('Upload Document method triggered.');
    
        $request->validate([
            'document' => 'required|image|mimes:jpeg,png,jpg,webp|max:10240', // 10MB max
        ]);
    
        \Log::info('Validation passed.');
    
        $imageFile = $request->file('document');
        \Log::info('File received: ' . $imageFile->getClientOriginalName());
    
        $watermarkPath = storage_path('app/public/images/logo_main.png');
        $image = Image::make($imageFile->getRealPath());
    
        if (file_exists($watermarkPath)) {
            $watermark = Image::make($watermarkPath);
            $image->insert($watermark, 'bottom-right', 10, 10);
        }
    
        if ($imageFile->getSize() / 1024 > 500) {
            $image->encode('jpg', 75);
        }
    
        $fileName = time() . '.jpg';
        $filePath = 'documents/' . $fileName;
        Storage::disk('public')->put($filePath, (string)$image->encode());
    
        \Log::info('Image saved at: ' . $filePath);
    
        return response()->json([
            'message' => 'Document uploaded successfully.',
            'file_url' => Storage::url($filePath),
        ]);
    }
    
}
