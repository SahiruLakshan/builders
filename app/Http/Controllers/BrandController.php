<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Brand;

use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        return view('admin.addbrand');
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
            return redirect()->back()->with('error', 'Validation is failed.');
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

            return redirect()->back()->with('success', 'Brand Added.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the brand.');
        }
    }


    public function update($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return redirect()->back()->with('error', 'Brand is not found');
        }
        return view('admin.updateforms.updatebrand', compact('brand'));
    }

    public function updateBrand(Request $request, $id)
    {
        // Find the brand by ID
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->back()->with('error', 'Brand is not found.');
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

        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Validation failed.');
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

            if ($request->hasFile('brand_img')) {
                if (!empty($brand->brand_img) && file_exists(public_path('assets/brand/' . $brand->brand_img))) {
                    unlink(public_path('assets/brand/' . $brand->brand_img));
                }

                $file = $request->file('brand_img');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/brand'), $filename); // Move to the 'assets/brand' directory

                $data['brand_img'] = $filename;
            }

            // Update other brand data if necessary
            $brand->update($data); // Assuming $data contains other fields too


            // Update the brand
            $brand->update($data);

            return redirect()->back()->with('success', 'Brand Updated.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the Brand.');
        }
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
