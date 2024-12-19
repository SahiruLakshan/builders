<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    // public function showproduct()
    // {
    //     $products = Product::all();


    //     return view('admin.brand', compact('products', ));
    // }

    public function index()
    {
        $products = Product::all();
        return view('admin.addbrand', compact('products'));
    }
    //for the connect product with Brand
    public function brandproduct()
    {
        return view('admin.brandproduct');
    }


    public function brands(Request $request)
    {
        $query = $request->input('query');

        $brands = Brand::where('b_name', 'like', '%' . $query . '%')->orWhere('id', 'like', '%' . $query . '%')->paginate(8);

        if ($request->ajax()) {
            return view('admin.viewtbl.brandpagination', compact('brands'))->render();
        }

        return view('admin.viewtbl.viewbrand', compact('brands'));
    }

    public function submitBrand(Request $request)
    {
        $validated = $request->validate([
            'b_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'address' => 'required|string',
            'description' => 'required|string',
            'country_of_origin' => 'required|string|max:255',
            'production' => 'required|string',
            'brand_contact_number' => 'required|digits:10',
            'brand_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'br' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'whatsapp_no' => 'nullable|digits:10',
            'b_email' => 'nullable|email',
            'b_web_link' => 'required',
            'directors' => 'nullable|array',
        ]);

        if ($request->hasFile('brand_img')) {
            $file = $request->file('brand_img');
            $filename = time() . '_' . $file->getClientOriginalName(); // Create a unique filename
            $file->move(public_path('assets/brand'), $filename); // Move the file to the desired directory
            $validated['brand_img'] = 'assets/brand/' . $filename; // Save the relative path
        }

        $validated['directors'] = json_encode($request->input('directors', []));

        Brand::create($validated);

        return redirect()->back()->with('success', 'Brand added successfully!');
    }


    public function update($id)
    {
        $brand = Brand::find($id);
        $products = Product::all();
        if (!$brand) {
            return redirect()->back()->with('error', 'Brand is not found');
        }
        return view('admin.updateforms.updatebrand', compact('brand', 'products'));
    }

    public function updateBrand(Request $request, $id)
    {
        // Validate the request
        $validated = $request->validate([
            'b_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'address' => 'required|string',
            'description' => 'required|string',
            'country_of_origin' => 'required|string|max:255',
            'production' => 'required|string',
            'brand_contact_number' => 'required|digits:10',
            'brand_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'br' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'whatsapp_no' => 'nullable|digits:10',
            'b_email' => 'nullable|email',
            'b_web_link' => 'required|string',
            'directors' => 'nullable|array',
        ]);

        // Find the existing brand record
        $brand = Brand::findOrFail($id);

        // Update the brand image if a new file is uploaded
        if ($request->hasFile('brand_img')) {
            // Delete the old image
            if ($brand->brand_img && file_exists(public_path($brand->brand_img))) {
                unlink(public_path($brand->brand_img));
            }

            // Handle the new image
            $file = $request->file('brand_img');
            $filename = time() . '_' . $file->getClientOriginalName(); // Create a unique filename
            $file->move(public_path('assets/brand'), $filename); // Move the file to the desired directory
            $validated['brand_img'] = 'assets/brand/' . $filename; // Save the relative path
        } else {
            // Keep the existing image if no new file is uploaded
            $validated['brand_img'] = $brand->brand_img;
        }



        // Convert directors to JSON format
        $validated['directors'] = json_encode($request->input('directors', []));

        // Update the brand record
        $brand->update($validated);

        return redirect()->back()->with('success', 'Brand updated successfully!');
    }



    public function deleteBrand($id)
    {
        // Find the brand by ID
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->back()->with('warning', 'Brand is not found.');
        }

        try {
            // Delete the brand
            $brand->delete();

            return redirect()->back()->with('success', 'Brand Deleted.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while deleting the brand.');
        }
    }
}
