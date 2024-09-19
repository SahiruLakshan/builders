<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Brand;

use Illuminate\Http\Request;

class BrandController extends Controller
{

    // public function brand()
    // {
    //     return view('admin.addbrand');
    // }

    public function index()
    {
        return view('admin.addbrand');
    }

    public function brands()
    {
        $brands = Brand::all();
        return view('admin.viewtbl.viewBrand', compact('brands'));
    }

    public function submitBrand(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'b_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'description' => 'nullable|string|max:1000',
            'country_of_origin' => 'required|string|max:255',
            'production' => 'required|string|max:255',
            'brand_contact_number' => 'required|regex:/^[0-9]{10}$/',
            'email' => 'required|email|max:255|unique:brands,email',
            'brand_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // optional image upload
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        try {
            // Prepare data for saving
            $data = $request->only([
                'b_name',
                'company_name',
                'address',
                'description',
                'country_of_origin',
                'production',
                'brand_contact_number',
                'email'
            ]);

            // Handle file upload if provided
            if ($request->hasFile('brand_img')) {
                $file = $request->file('brand_img');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move('assets/brand', $filename); // Save image to 'storage/app/public/brand_images'
                $data['brand_img'] = $filename;  // Store filename in the database
            }

            // Save brand data
            $brand = new Brand($data);
            $brand->save();

            return response()->json([
                'message' => 'Brand added successfully!',
                'status' => 200
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while adding the brand.',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }


    public function update($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return redirect()->back()->with('error', 'Brand not found');
        }
        return view('admin.updateforms.updatebrand',compact('brand'));
    }

    public function updateBrand(Request $request, $id)
    {
        // Find the brand by ID
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json([
                'message' => 'Brand not found',
                'status' => 404
            ], 404);
        }

        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'b_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'description' => 'nullable|string|max:1000',
            'country_of_origin' => 'required|string|max:255',
            'production' => 'required|string|max:255',
            'brand_contact_number' => 'required|regex:/^[0-9]{10}$/',
            'email' => 'required|email|max:255|unique:brands,email,' . $brand->id, // Ignore current brand's email for uniqueness check
            'brand_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // optional image upload
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        try {
            // Update the brand data
            $data = $request->only([
                'b_name',
                'company_name',
                'address',
                'description',
                'country_of_origin',
                'production',
                'brand_contact_number',
                'email'
            ]);

            // Check if a new image is uploaded
            if ($request->hasFile('brand_img')) {
                // Delete the old image if exists
                if ($brand->brand_img && file_exists(public_path('assets/brand/' . $brand->brand_img))) {
                    unlink(public_path('assets/brand/' . $brand->brand_img)); // Delete old image
                }

                // Save the new image
                $file = $request->file('brand_img');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move('assets/brand', $filename);
                $data['brand_img'] = $filename; // Store new filename in database
            }

            // Update the brand
            $brand->update($data);

            return response()->json([
                'message' => 'Brand updated successfully!',
                'status' => 200
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while updating the brand.',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }


    public function deleteBrand($id)
    {
        // Find the brand by ID
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json([
                'message' => 'Brand not found',
                'status' => 404
            ], 404);
        }

        try {
            // Delete the brand
            $brand->delete();

            return response()->json([
                'message' => 'Brand deleted successfully!',
                'status' => 200
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while deleting the brand.',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }
}
