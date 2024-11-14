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

    public function shopitem()
    {
        $products = Product::all();
        $sub = Productsub::all();
        $pc = Productcategory::all();
        $brands = Brand::all();
        $measurements = Measurement::all();
        return view('admin.shopitem', compact('products', 'sub', 'pc', 'brands', 'measurements'));
    }

    public function submitProducts(Request $request)
    {
        $products = json_decode($request->products, true);

        $validator = Validator::make(['products' => $products], [
            'products.*.brand_id' => 'required',
            'products.*.product_category_id' => 'required',
            'products.*.subcategory_id' => 'nullable',
            'products.*.quantity' => 'required|integer|min:1',
            'products.*.measurement_id' => 'required',
            'products.*.color' => 'nullable|string',
            'products.*.other_categories' => 'nullable|array',
            'products.*.description' => 'nullable|string',
            'products.*.unit_price' => 'required|numeric|min:0',
            'products.*.vendor' => 'nullable|string',
            'products.*.discount' => 'nullable|numeric|min:0',
            'products.*.cost' => 'nullable|numeric|min:0',
            'products.*.applications' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            foreach ($products as $index => $product) {
                $filename = null;
                $attachmentName = null;

                // Handle image upload with dynamic key
                if ($request->hasFile("image_$index")) {
                    $file = $request->file("image_$index");
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move('assets/shopproduct', $filename);
                }

                // Handle attachment upload with dynamic key
                if ($request->hasFile("attachment_$index")) {
                    $attachment = $request->file("attachment_$index");
                    $attachmentName = time() . '_' . $attachment->getClientOriginalName();
                    $attachment->move(public_path('assets/shopattachments'), $attachmentName);
                }

                Shopproduct::create([
                    'product_id' => $product['product_id'],
                    'brand_id' => $product['brand_id'],
                    'product_category_id' => $product['product_category_id'],
                    'subcategory_id' => $product['subcategory_id'] ?? null,
                    'quantity' => $product['quantity'],
                    'measurement_id' => $product['measurement_id'],
                    'color' => $product['color'] ?? null,
                    'image' => $filename,
                    'other_categories' => $product['other_categories'] ?? [],
                    'description' => $product['description'] ?? null,
                    'unit_price' => $product['unit_price'],
                    'vendor' => $product['vendor'] ?? null,
                    'discount' => $product['discount'] ?? 0,
                    'cost' => $product['cost'] ?? null,
                    'applications' => $product['applications'] ?? null,
                    'attachment' => $attachmentName,
                ]);
            }

            return redirect()->back()->with('success', 'Product added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }
}
