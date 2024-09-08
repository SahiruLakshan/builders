<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopCategory;
use Illuminate\Support\Facades\Validator;

class ShopCategoryController extends Controller
{

    public function index(){
        return view('');
    }
    
    public function insertShopCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        try {
            $shopCategory = new ShopCategory($request->all());
            $shopCategory->save();

            return response()->json([
                'message' => 'Shop category added successfully!',
                'status' => 200,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while adding the shop category.',
                'error' => $e->getMessage(),
                'status' => 500,
            ], 500);
        }
    }

    public function getShopCategory($id)
    {
        $shopCategory = ShopCategory::find($id);

        if (!$shopCategory) {
            return response()->json([
                'message' => 'Shop category not found',
                'status' => 404,
            ], 404);
        }

        return response()->json([
            'message' => 'Shop category retrieved successfully!',
            'shopCategory' => $shopCategory,
            'status' => 200,
        ]);
    }

    public function updateShopCategory(Request $request, $id)
    {
        $shopCategory = ShopCategory::find($id);

        if (!$shopCategory) {
            return response()->json([
                'message' => 'Shop category not found',
                'status' => 404,
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        try {
            $shopCategory->update($request->all());

            return response()->json([
                'message' => 'Shop category updated successfully!',
                'status' => 200,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while updating the shop category.',
                'error' => $e->getMessage(),
                'status' => 500,
            ], 500);
        }
    }

    public function deleteShopCategory($id)
    {
        $shopCategory = ShopCategory::find($id);

        if (!$shopCategory) {
            return response()->json([
                'message' => 'Shop category not found',
                'status' => 404,
            ], 404);
        }

        try {
            $shopCategory->delete();

            return response()->json([
                'message' => 'Shop category deleted successfully!',
                'status' => 200,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while deleting the shop category.',
                'error' => $e->getMessage(),
                'status' => 500,
            ], 500);
        }
    }
}
