<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    // public function upload(Request $request)
    // {
    //     // Validate the uploaded files for each section
    //     $request->validate([
    //         'left_image.*' => 'file|mimes:jpg,png,jpeg|max:2048',
    //         'middle_image.*' => 'file|mimes:jpg,png,jpeg|max:2048',
    //         'right_image.*' => 'file|mimes:jpg,png,jpeg|max:2048',
    //     ]);

    //     $uploadedFiles = [];

    //     foreach (['left_image', 'middle_image', 'right_image'] as $imageType) {
    //         if ($request->hasFile($imageType)) {
    //             foreach ($request->file($imageType) as $file) {
    //                 $filename = time() . '_' . $file->getClientOriginalName();
    //                 $file->move(public_path('assets/Advertisementuploads'), $filename);
    //                 $uploadedFiles[] = $filename;
    //             }
    //         }
    //     }

    //     return response()->json(['success' => true, 'message' => 'Files uploaded successfully.', 'files' => $uploadedFiles]);
    // }

    public function upload(Request $request)
    {
        // Validate the uploaded files for each section
        $request->validate([
            'left_image.*' => 'file|mimes:jpg,png,jpeg|max:2048',
            'middle_image.*' => 'file|mimes:jpg,png,jpeg|max:2048',
            'right_image.*' => 'file|mimes:jpg,png,jpeg|max:2048',
        ]);

        $uploadedFiles = [];

        foreach (['left_image', 'middle_image', 'right_image'] as $imageType) {
            if ($request->hasFile($imageType)) {
                foreach ($request->file($imageType) as $file) {
                    // Generate a unique filename using current date and time
                    $timestamp = now()->format('Ymd_His'); // Format: YYYYMMDD_HHMMSS
                    $filename = "{$imageType}_{$timestamp}_" . $file->getClientOriginalName();

                    // Move the file to the desired directory
                    $file->move(public_path('assets/Advertisementuploads'), $filename);
                    $uploadedFiles[] = $filename;
                }
            }
        }

        return response()->json(['success' => true, 'message' => 'Files uploaded successfully.', 'files' => $uploadedFiles]);
    }
}
