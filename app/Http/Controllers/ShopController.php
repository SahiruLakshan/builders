<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Support\Facades\Validator;
use App\Models\Shop;
use App\Models\City;
use App\Models\ShopCategory;
use App\Models\Shopproduct;
use Illuminate\Http\Request;
use App\Mail\ShopApproved;
use App\Mail\CancelApproved;
use App\Mail\ProductApprove;
use App\Mail\CancelProduct;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{

    public function shopprofile($id)
    {


        $shop = Shop::with('district', 'city')->find($id);
        $district = District::where('dis_id', $shop->district)->first();
        $city = City::where('ds_id', $shop->city)->first();

        $alldistricts = District::all();
        $allcities = City::all();

        $product_count = Shopproduct::where('shop_id', $id)->count();
        $brand_count = Shopproduct::where('shop_id', $id)->distinct('brand_id')->count();
        $category_count = Shopproduct::where('shop_id', $id)->distinct('product_category_id')->count();


        $shop_product = Shopproduct::where('shop_id', $id)->with('product', 'category', 'brand')->get();
        ;
        if (!$shop) {
            return response()->json([
                'message' => 'Shop not found',
                'status' => 404
            ], 404);
        }

        return view('profile.profiles.shopprofile', compact('shop', 'shop_product', 'district', 'city', 'alldistricts', 'allcities', 'product_count', 'brand_count', 'category_count'));
    }

    //login
    public function login()
    {
        return view('login');
    }

    public function index()
    {
        $dictricts = District::with('city')->select('dis_id', 'dis_name')->get();
        $category = ShopCategory::all();
        return view('admin.addshop', compact('dictricts', 'category'));
    }

    public function shops(Request $request)
    {
        $query = $request->input('query');

        $shops = Shop::where('name', 'like', '%' . $query . '%')
            ->orWhere('number', 'like', '%' . $query . '%')
            ->orderBy('created_at', 'desc') // Order by latest first
            ->paginate(8);


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
            't_number' => 'required|string|max:255',
            'w_number' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'category' => 'required|array',                   // multiple categories
            'category.*' => 'string|max:255',                 // each category must be a string
            'location' => 'nullable|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'fb_link' => 'nullable|url|max:255',
            'shop_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_name' => 'required|string|max:255',
            'c_br' => 'required|string|max:255',
            'directors' => 'required|array',
            'directors.*.name' => 'required|string|max:255',
            'directors.*.contact' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $data = $request->only([
                'number',
                'name',
                'email',
                'address',
                'district',
                'p_number',
                't_number',
                'w_number',
                'city',
                'location',
                'start_time',
                'end_time',
                'fb_link',
                'company_name',
                'c_br',
                'latitude',
                'longitude'
            ]);

            // Handle multiple categories
            $data['category'] = implode(',', $request->input('category')); // convert array to comma-separated string

            if ($request->hasFile('shop_img')) {              // image upload
                $file = $request->file('shop_img');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move('assets/shop', $filename);
                $data['shop_img'] = $filename;
            }

            $data['directors'] = json_encode($request->input('directors', []));
            $shop = new Shop($data);                         // save shop data
            $shop->save();

            return redirect()->back()->with('success', 'Shop Added.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }


    public function update($id)
    {
        $shop = Shop::find($id);
        $dictricts = District::with('city')->select('dis_id', 'dis_name')->get();
        $selectedCategories = explode(',', $shop->category);
        $category = ShopCategory::all();
        if (!$shop) {
            return redirect()->back()->with('error', 'Shop is not found');
        }
        return view('admin.updateforms.updateshop', compact('shop', 'dictricts', 'category', 'selectedCategories'));
    }

    public function updateShop(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [       // data validation
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:shops,email,' . $id, // ignore current shop's email
            'address' => 'required|string|max:500',
            'p_number' => 'required|string|max:255',
            't_number' => 'required|string|max:255',
            'w_number' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'category' => 'required|array',                   // multiple categories
            'category.*' => 'string|max:255',                 // each category must be a string
            'location' => 'nullable|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'fb_link' => 'nullable|url|max:255',
            'shop_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_name' => 'required|string|max:255',
            'c_br' => 'required|string|max:255',
            'directors' => 'required|array',
            'directors.*.name' => 'required|string|max:255',
            'directors.*.contact' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $shop = Shop::findOrFail($id);                   // find the shop by ID

            $data = $request->only([
                'name',
                'email',
                'address',
                'district',
                'p_number',
                't_number',
                'w_number',
                'city',
                'location',
                'start_time',
                'end_time',
                'fb_link',
                'company_name',
                'c_br',
                'latitude',
                'longitude'
            ]);

            // Handle multiple categories
            $data['category'] = implode(',', $request->input('category')); // convert array to comma-separated string

            if ($request->hasFile('shop_img')) {             // handle image upload if new file is provided
                // Delete the old image if it exists
                if ($shop->shop_img && file_exists(public_path('assets/shop/' . $shop->shop_img))) {
                    unlink(public_path('assets/shop/' . $shop->shop_img));
                }

                $file = $request->file('shop_img');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move('assets/shop', $filename);
                $data['shop_img'] = $filename;
            }

            $data['directors'] = json_encode($request->input('directors', []));
            $shop->update($data);                            // update shop data

            return redirect()->back()->with('success', 'Shop Updated.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function deleteShop($id)
    {
        $shop = Shop::find($id);

        if (!$shop) {
            return redirect()->back()->with('warning', 'Shop is not found.');
        }

        try {
            if ($shop->logo_img && Storage::exists('public/assets/shop/' . $shop->logo_img)) {
                Storage::delete('public/assets/shop/' . $shop->logo_img); // Delete the image file
            }

            $shop->delete();

            return redirect()->back()->with('success', 'Shop Deleted.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the shop.');
        }
    }

    public function approveShop($id)
    {
        $shop = Shop::find($id);
        $shop->shop_approve = Carbon::now();
        $shop->cancel_shop = 'No';
        $shop->save();

        // Send email
        Mail::to($shop->email)->send(new ShopApproved($shop));
        return response()->json(['message' => 'Shop approved and email sent successfully!']);
    }

    public function cancelShop($id)
    {
        $shop = Shop::find($id);
        $shop->cancel_shop = 'Yes';
        $shop->save();

        Mail::to($shop->email)->send(new CancelApproved($shop));
        return response()->json(['message' => 'Shop approval canceled successfully!']);
    }

    // public function approveProduct($id)
    // {
    //     $shop = Shop::find($id);
    //     $shop->product_approve = Carbon::now();
    //     $shop->cancel_product = 'No';
    //     $shop->save();

    //     Mail::to($shop->email)->send(new ProductApprove($shop));

    //     return response()->json(['message' => 'Product approved successfully!']);
    // }

    public function approveProduct($id)
    {
        try {
            $shop = Shop::find($id);

            if (!$shop) {
                // Log if shop not found
                Log::error("Shop not found with ID: {$id}");
                return response()->json(['message' => 'Shop not found'], 404);
            }

            // Update product approval and cancellation status
            $shop->product_approve = Carbon::now();
            $shop->cancel_product = 'No';
            $shop->save();

            // Send email and catch any mail exceptions
            Mail::to($shop->email)->send(new ProductApprove($shop));

            return response()->json(['message' => 'Product approved successfully!']);
        } catch (\Exception $e) {
            // Log the exception message
            Log::error("Error approving product for shop ID {$id}: " . $e->getMessage());

            return response()->json(['message' => 'An error occurred while approving the product'], 500);
        }
    }

    public function cancelProduct($id)
    {
        $shop = Shop::find($id);
        $shop->cancel_product = 'Yes';
        $shop->save();

        Mail::to($shop->email)->send(new CancelProduct($shop));
        return response()->json(['message' => 'Product approval canceled successfully!']);
    }

    public function approvedshop(Request $request)
    {

        $query = $request->input('query');

        $shops = Shop::where(function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%')
                ->orWhere('id', 'like', '%' . $query . '%');
        })
            ->where('cancel_shop', 'No')
            ->where('cancel_product', 'No')
            ->paginate(8);

        if ($request->ajax()) {
            return view('admin.viewtbl.approvalpagination', compact('shops'))->render();
        }

        return view('admin.viewtbl.viewapproval', compact('shops'));
    }
}
