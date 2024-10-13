<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\ShopCategory;
use App\Models\City;
use App\Models\District;
use App\Models\Brand;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{
    public function shopcategory($name)
    {
        $shops = Shop::where('category', 'like', '%' . $name . '%')->paginate(20);
        // dd($shops);
        // $brand = Shop::where('category', 'like', '%' . $name . '%')->brand()->get();
        return view('webpages.product', compact('shops'));





    }
    public function shopSuppliers(Request $request)
    {
        $shop_catogories = ShopCategory::select('id', 'name')->get();
        $brands = Brand::select('id', 'b_name')->get();
        // dd($shop_catogories);
        $dictricts = District::with('city')->select('dis_id', 'dis_name')->get();
        // dd($dictricts, $dictricts[0]->city[1]->ds_name);
        // dd($dictricts[0]->city);
        // print_r($dictricts);
        // $citys = City::with('district')->get();
        // dd($citys);



        return view('webpages.shopSuppliers', compact('shop_catogories', 'brands', 'dictricts'));

    }

    public function addshopSuppliers(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'shop_name' => 'required|string|max:255',
            'address' => 'required|string|max:255|unique:shops,address',
            'shop_category' => 'required|string|max:500',
            'telephone' => 'required|string|max:255',
            'mobile' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'fb_link' => 'nullable|url|max:255',
            'bussiness_reg_no' => 'nullable|string|max:255',
            'shop_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Prepare the data for saving
            $data = $request->only([
                'shop_name',
                'address',
                'shop_category',
                'telephone',
                'mobile',
                'whatsapp',
                'location',
                'fb_link',
                'bussiness_reg_no',
                'district',
                'city',
                'brand'
            ]);

            // Convert category array to comma-separated string if necessary
            $data['category'] = implode(',', $request->input('category', []));

            // Handle the shop image upload
            if ($request->hasFile('shop_image')) {
                $file = $request->file('shop_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/shop'), $filename);
                $data['shop_image'] = $filename;
            }

            // Save the shop data to the database
            Shop::create($data);

            return redirect()->back()->with('success', 'Shop Added Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the shop.');
        }
    }


    //add filter 




}
