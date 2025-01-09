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
    
        try {
            // Validate the uploaded file
            $request->validate([
                'document' => 'required|image|mimes:jpeg,png,jpg,webp|max:10240', // 10MB max
            ]);
    
            $imageFile = $request->file('document');
            if (!$imageFile) {
                \Log::error('File upload failed. File not received.');
                return response()->json(['message' => 'Failed to upload document.', 'error' => 'No file received.'], 500);
            }
    
            \Log::info('File received: ' . $imageFile->getClientOriginalName());
    
            // Load the watermark
            $watermarkPath = public_path('images/logo_main.png'); // Ensure this file exists in public/images
            $image = \Intervention\Image\Facades\Image::make($imageFile->getRealPath());
    
            // Apply the watermark if it exists
            if (file_exists($watermarkPath)) {
                $watermark = \Intervention\Image\Facades\Image::make($watermarkPath);
                $image->insert($watermark, 'bottom-right', 10, 10);
            }
    
            // Compress image if it exceeds 500KB
            if ($imageFile->getSize() / 1024 > 500) {
                $image->encode('jpg', 75); // Compress to 75% quality
            }
    
            // Define the public path for saving the image
            $fileName = time() . '.jpg'; // Save as a JPG
            $filePath = public_path('images/documents/' . $fileName);
    
            // Ensure the directory exists
            if (!file_exists(public_path('images/documents'))) {
                mkdir(public_path('images/documents'), 0775, true);
            }
    
            // Save the image to the public directory
            $image->save($filePath);
    
            \Log::info('Image successfully saved at: ' . $filePath);
    
            return response()->json([
                'message' => 'Document uploaded successfully.',
                'file_url' => asset('images/documents/' . $fileName),
            ]);
        } catch (\Exception $e) {
            \Log::error('Error uploading document: ' . $e->getMessage(), [
                'line' => $e->getLine(),
                'file' => $e->getFile(),
            ]);
    
            return response()->json([
                'message' => 'Failed to upload document.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    
    
}
