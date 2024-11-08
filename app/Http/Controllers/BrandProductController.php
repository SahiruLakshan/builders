<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Brandproduct;
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


    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'brand_id' => 'required|exists:brands,id',
    //         'product_id' => 'required|exists:products,id',
    //     ]);

    //     // Insert the brand-product connection with the `created_by` field
    //     DB::table('brandproduct')->insert([
    //         'brand_id' => $request->input('brand_id'),
    //         'product_id' => $request->input('product_id'),
    //         'created_by' => auth()->id(), // Save the creator's ID
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     return redirect()->route('brandproduct.form')->with('success', 'Brand-Product connection created successfully!');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'product_id' => 'required|exists:products,id',

        ]);

        DB::table('brandproduct')->insert([
            'brand_id' => $request->input('brand_id'),
            'product_id' => $request->input('product_id'),
            //'created_by' => auth()->id(), // Ensure user is authenticated
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('brandproduct.form')->with('success', 'Brand-Product connection created successfully!');
    }


    // public function store(Request $request)
    // {
    //     // Validate the incoming request data
    //     $request->validate([
    //         'brand_id' => 'required|exists:brands,id',
    //         'product_id' => 'required|exists:products,id',
    //     ]);

    //     // Insert the brand-product relationship into the database
    //     DB::table('brandproduct')->insert([
    //         'brand_id' => $request->input('brand_id'),
    //         'product_id' => $request->input('product_id'),
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     dd($request->all());

    //     return redirect()->route('brandproduct.form')->with('success', 'Brand-Product connection created successfully!');
    // }
    // public function store(Request $request)
    // {
    //     // Validate the incoming request data
    //     $request->validate([
    //         'brand_id' => 'required|exists:brands,id',
    //         'product_id' => 'required|exists:products,id',
    //     ]);

    //     try {
    //         // Check if the combination of brand and product already exists
    //         $existingRecord = DB::table('brandproduct')
    //             ->where('brand_id', $request->input('brand_id'))
    //             ->where('product_id', $request->input('product_id'))
    //             ->first();

    //         if ($existingRecord) {
    //             return redirect()->route('brandproduct.form')->with('error', 'This Brand-Product combination already exists.');
    //         }

    //         // Insert the brand-product connection into the database
    //         DB::table('brandproduct')->insert([
    //             'brand_id' => $request->input('brand_id'),
    //             'product_id' => $request->input('product_id'),
    //             'created_by' => auth()->id(), // Store the authenticated user's ID
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ]);

    //         // Redirect back with a success message
    //         return redirect()->route('brandproduct.form')->with('success', 'Brand-Product connection created successfully!');
    //     } catch (\Exception $e) {
    //         // Handle any exceptions and log the error for debugging
    //         \Log::error('Error inserting brand-product connection: ' . $e->getMessage());
    //         return redirect()->route('brandproduct.form')->with('error', 'An error occurred while creating the connection.');
    //     }
    // }


}
