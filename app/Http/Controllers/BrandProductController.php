<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class BrandProductController extends Controller
{
    // Method to display the form view
    public function showForm()
    {
        $products = Product::all();
        $brands = Brand::all();

        return view('admin.brandproduct', compact('products', 'brands'));
    }

    // Method to fetch brands for AJAX (used in Select2)
    // public function fetchBrands(Request $request)
    // {
    //     $query = $request->input('query');
    //     $brands = Brand::where('b_name', 'like', '%' . $query . '%')
    //         ->orWhere('id', 'like', '%' . $query . '%')
    //         ->get();

    //     return response()->json($brands);
    // }

    // // Method to fetch products for AJAX (used in Select2)
    // public function fetchProducts(Request $request)
    // {
    //     $query = $request->input('query');
    //     $products = Product::where('name', 'like', '%' . $query . '%')
    //         ->orWhere('id', 'like', '%' . $query . '%')
    //         ->get();

    //     return response()->json($products);
    // }

    // Method to save the brand-product connection
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'product' => 'required|exists:products,id',
    //         'brand' => 'required|exists:brands,id',
    //     ]);

    //     DB::table('brandproduct')->insert([
    //         'brand_id' => $validated['brand'],
    //         'product_id' => $validated['product'],
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);

    //     return redirect()->back()->with('success', 'Brand and Product linked successfully!');
    // }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'product_id' => 'required|exists:products,id',
        ]);

        // Create the brandproduct entry
        DB::table('brandproduct')->insert([
            'brand_id' => $request->input('brand_id'),
            'product_id' => $request->input('product_id'),
            // 'created_by' => auth()->id(), // Set the creator's ID
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('brandproduct.form')->with('success', 'Brand-Product connection created successfully!');
    }

}
