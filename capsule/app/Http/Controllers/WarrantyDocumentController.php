<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class WarrantyDocumentController extends Controller
{
    public function uploadDocument(Request $request)
    {
        Log::info('Upload Document method triggered.');

        try {
            // Validate the uploaded file
            $request->validate([
                'document' => 'required|image|mimes:jpeg,png,jpg,webp|max:10240', // 10MB max
            ]);

            $imageFile = $request->file('document');
            if (!$imageFile) {
                Log::error('File upload failed. File not received.');
                return response()->json(['message' => 'Failed to upload document.', 'error' => 'No file received.'], 400);
            }

            Log::info('File received: ' . $imageFile->getClientOriginalName());
            Log::info('File size: ' . $imageFile->getSize() . ' bytes');
            Log::info('File MIME type: ' . $imageFile->getMimeType());

            // Load the watermark
            $watermarkPath = public_path('images/logo_main.png');
            if (!file_exists($watermarkPath)) {
                Log::error('Watermark file not found at: ' . $watermarkPath);
                return response()->json(['message' => 'Failed to upload document.', 'error' => 'Watermark file missing.'], 500);
            }

            // Attempt to process the image
            try {
                $image = Image::make($imageFile->getRealPath());
                Log::info('Image loaded successfully.');
            } catch (\Exception $e) {
                Log::error('Failed to load image: ' . $e->getMessage());
                return response()->json(['message' => 'Failed to upload document.', 'error' => 'Invalid image file.'], 400);
            }

            // Apply the watermark
            try {
                $watermark = Image::make($watermarkPath);
                $image->insert($watermark, 'bottom-right', 10, 10);
                Log::info('Watermark applied successfully.');
            } catch (\Exception $e) {
                Log::error('Failed to apply watermark: ' . $e->getMessage());
                return response()->json(['message' => 'Failed to upload document.', 'error' => 'Watermark application failed.'], 500);
            }

            // Compress image if it exceeds 500KB
            if ($imageFile->getSize() / 1024 > 500) {
                $image->encode('jpg', 75);
                Log::info('Image compressed to 75% quality.');
            }

            // Define the public path for saving the image
            $fileName = time() . '.jpg'; // Save as a JPG
            $filePath = public_path('images/documents/' . $fileName);

            // Ensure the directory exists
            if (!file_exists(public_path('images/documents'))) {
                mkdir(public_path('images/documents'), 0775, true);
                Log::info('Created directory: ' . public_path('images/documents'));
            }

            // Save the image to the public directory
            try {
                $image->save($filePath);
                Log::info('Image successfully saved at: ' . $filePath);
            } catch (\Exception $e) {
                Log::error('Failed to save image: ' . $e->getMessage());
                return response()->json(['message' => 'Failed to upload document.', 'error' => 'Image saving failed.'], 500);
            }

            // Return success response
            return response()->json([
                'message' => 'Document uploaded successfully.',
                'file_url' => asset('images/documents/' . $fileName),
            ]);
        } catch (\Exception $e) {
            // Catch unexpected errors and log them
            Log::error('Unexpected error during document upload: ' . $e->getMessage(), [
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
