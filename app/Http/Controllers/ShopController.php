<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Support\Facades\Validator;
use App\Models\Shop;
use App\Models\City;
use App\Models\ShopCategory;
use App\Models\Shopproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{

    public function shopprofile($id)
    {
        

        $shop = Shop::with('district','city')->find($id);
        $district = District::where('dis_id', $shop->district)->first();
        $city = City::where('ds_id', $shop->city)->first();

        $alldistricts = District::all();
        $allcities = City::all();

        $product_count = Shopproduct::where('shop_id', $id)->count();
        $brand_count = Shopproduct::where('shop_id', $id)->distinct('brand_id')->count();
        $category_count = Shopproduct::where('shop_id', $id)->distinct('product_category_id')->count();


        $shop_product = Shopproduct::where('shop_id', $id)->with('product','category','brand')->get();;
        if (!$shop) {
            return response()->json([
                'message' => 'Shop not found',
                'status' => 404
            ], 404);
        }

        return view('profile.profiles.shopprofile',compact('shop','shop_product','district','city','alldistricts','allcities','product_count','brand_count','category_count'));
    }

    //login
    public function login()
    {
        return view('login');
    }

    public function index()
    {
        $districts = District::all();
        $city = City::all();
        $category = ShopCategory::all();
        return view('admin.addshop', compact('districts', 'city','category'));
    }

    public function shops(Request $request){
        $query = $request->input('query');

        $shops = Shop::where('name', 'like', '%' . $query . '%')->orWhere('id', 'like', '%' . $query . '%')->paginate(8);

        if ($request->ajax()) {
            return view('admin.viewtbl.shoppagination', compact('shops'))->render();
        }

        return view('admin.viewtbl.viewshop', compact('shops'));
    }

    public function submitShop(Request $request)
{
    $validator = Validator::make($request->all(), [       // data validation
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:shops,email',
        'address' => 'required|string|max:500',
        'p_number' => 'required|string|max:255',
        'district' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'category' => 'required|array',                   // multiple categories
        'category.*' => 'string|max:255',                 // each category must be a string
        'location' => 'required|string|max:255',
        'start_time' => 'required|date_format:H:i',
        'end_time' => 'required|date_format:H:i|after:start_time',
        'fb_link' => 'nullable|url|max:255',
        'br' => 'required|string|max:255',
        'shop_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($validator->fails()) {                            // validation check
        return response()->json([
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
            'status' => 422,
        ], 422);
    }

    try {
        $data = $request->only([
            'name',
            'email',
            'address',
            'district',
            'p_number',
            'city',
            'location',
            'start_time',
            'end_time',
            'fb_link',
            'br'
        ]);

        // Handle multiple categories
        $data['category'] = implode(',', $request->input('category')); // convert array to comma-separated string

        if ($request->hasFile('shop_img')) {              // image upload
            $file = $request->file('shop_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move('assets/shop', $filename);
            $data['shop_img'] = $filename;
        }

        $shop = new Shop($data);                         // save shop data
        $shop->save();

        return response()->json([
            'message' => 'Shop submitted successfully!',
            'status' => 200
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'An error occurred while submitting the shop details.',
            'error' => $e->getMessage(),
            'status' => 500
        ], 500);
    }
}


    public function update($id)
    {
        $shop = Shop::find($id);
        $districts = District::all();
        $city = City::all();
        $selectedCategories = explode(',', $shop->category);
        $category = ShopCategory::all();
        if (!$shop) {
            return redirect()->back()->with('error', 'Shop not found');
        }
        return view('admin.updateforms.updateshop',compact('shop','districts','city','category', 'selectedCategories'));
    }

    public function updateShop(Request $request, $id)
    {
        $shop = Shop::find($id);
        if (!$shop) {
            return response()->json([
                'message' => 'Shop not found',
                'status' => 404
            ], 404);
        }

        // Validate the input data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:shops,email,' . $shop->id, // Ignore the current shop's email
            'address' => 'required|string|max:500',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'fb_link' => 'nullable|url|max:255',
            'br' => 'required|string|max:255',
            'shop_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Nullable if not changing image
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422
            ], 422);
        }

        try {
            $shop->name = $request->input('name');
            $shop->email = $request->input('email');
            $shop->address = $request->input('address');
            $shop->district = $request->input('district');
            $shop->city = $request->input('city');
            $shop->p_number = $request->input('p_number');
            $shop->location = $request->input('location');
            $shop->start_time = $request->input('start_time');
            $shop->end_time = $request->input('end_time');
            $shop->fb_link = $request->input('fb_link');
            $shop->br = $request->input('br');


            if ($request->hasFile('shop_img')) {
                $file = $request->file('shop_img');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move('assets/shop', $filename); 
                $shop->shop_img = $filename;
            }

            // Save the updated shop data
            $shop->save();

            // Return success response
            return response()->json([
                'message' => 'Shop updated successfully!',
                'status' => 200
            ]);
        } catch (\Exception $e) {
            // Return error response if something goes wrong
            return response()->json([
                'message' => 'An error occurred while updating the shop details.',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }

    public function deleteShop($id)
    {
        $shop = Shop::find($id);

        if (!$shop) {
            return response()->json([
                'message' => 'Shop not found',
                'status' => 404
            ], 404);
        }

        try {
            if ($shop->logo_img && Storage::exists('public/assets/shop/' . $shop->logo_img)) {
                Storage::delete('public/assets/shop/' . $shop->logo_img); // Delete the image file
            }

            $shop->delete();

            return response()->json([
                'message' => 'Shop deleted successfully!',
                'status' => 200
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while deleting the shop.',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }


}
