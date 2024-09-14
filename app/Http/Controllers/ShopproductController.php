<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Measurement;
use App\Models\Product;
use App\Models\Productcategory;
use App\Models\Productsub;
use App\Models\Shop;
use App\Models\Shopproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShopproductController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        $brand = Brand::all();
        $measurement = Measurement::all();
        $products = Product::all();
        $pc = Productcategory::all();
        $sub = Productsub::all();
        return view('admin.addshopproduct', compact('shops','brand','measurement','products','pc','sub'));
    }

    public function submitProducts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'shop_name' => 'required|exists:shops,id', // Ensure the shop exists in the database
            'products.*.productName' => 'required|string',
            'products.*.brand' => 'required|string',
            'products.*.category' => 'required|string',
            'products.*.subCategory' => 'nullable|string',
            'products.*.quantity' => 'required|integer|min:1',
            'products.*.measurement' => 'required|string',
            'products.*.color' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        try {
            foreach ($request->products as $product) {
                // Store product in the database for the given shop
                Shopproduct::create([
                    'shop_id' => $request->shop_name,
                    'product_id' => $product['productName'],
                    'brand_id' => $product['brand'],
                    'product_category_id' => $product['category'],
                    'subcategory_id' => $product['subCategory'] ?? null,
                    'quantity' => $product['quantity'],
                    'measurement_id' => $product['measurement'],
                    'color' => $product['color'] ?? null,
                ]);
            }

            return response()->json([
                'message' => 'Products added successfully!',
                'status' => 200,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while adding the products.',
                'error' => $e->getMessage(),
                'status' => 500,
            ], 500);
        }
    }
}
