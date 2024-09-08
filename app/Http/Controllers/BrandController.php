<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Brand;

use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function brand()
    {
        return view('admin.addbrand');
    }

    public function index()
    {
        return response()->json([
            'message' => 'show shop add form',
            'status' => 200
        ]);
    }

    public function submitBrand(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'b_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'country_of_origin' => 'required|string|max:255',
            'production' => 'required|string|max:255',
            'brand_contact_number' => 'required|regex:/^[0-9]{10}$/',
            'email' => 'required|email|max:255|unique:brand,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        try {
            $brand = new Brand($request->all());
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
            return response()->json([
                'message' => 'Brand not found',
                'status' => 404
            ], 404);
        }
        return response()->json([
            'message' => 'show brand update form',
            'status' => 200
        ]);
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

        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'b_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'country_of_origin' => 'required|string|max:255',
            'production' => 'required|string|max:255',
            'brand_contact_number' => 'required|regex:/^[0-9]{10}$/',
            'email' => 'required|email|max:255|unique:brand,email,' . $id,
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        try {
            // Update brand data
            $brand->update($request->all());

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
