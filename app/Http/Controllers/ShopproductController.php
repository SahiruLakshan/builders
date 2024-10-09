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
    public function index($id)
    {
        $shops = Shop::find($id);
        $brand = Brand::all();
        $measurement = Measurement::all();
        $products = Product::all();
        $pc = Productcategory::all();
        $sub = Productsub::all();
        return view('admin.addshopproduct', compact('shops', 'brand', 'measurement', 'products', 'pc', 'sub'));
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
            'products.*.image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Validation failed.');
        }

        try {
            foreach ($request->products as $product) {
                // Handle the image upload
                $imageName = null;
                if (isset($product['image'])) {
                    // Save the image in public/assets/shopproduct folder
                    $imageName = time() . '_' . $product['image']->getClientOriginalName();
                    $product['image']->move(public_path('assets/shopproduct'), $imageName); // Store image in folder
                }

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
                    'image' => $imageName, // Only store image name in the database
                ]);
            }

            return redirect()->back()->with('success', 'Product Added.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the product.');
        }
    }
}
