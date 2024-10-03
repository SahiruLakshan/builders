<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded files
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Handle the uploaded file
        if ($request->hasFile('file')) {
            // Get the uploaded file
            $file = $request->file('file');

            // Generate a unique filename with extension
            $filename = time() . '_' . $file->getClientOriginalName();

            // Move the file to the desired directory (public/assets/Advertisementuploads)
            $file->move(public_path('assets/Advertisementuploads'), $filename);
            // Return success response
            return response()->json(['success' => true, 'message' => 'File uploaded successfully.', 'file' => $filename]);
        }

        // Return error response if something went wrong
        return response()->json(['success' => false, 'message' => 'File upload failed.']);
    }
}
