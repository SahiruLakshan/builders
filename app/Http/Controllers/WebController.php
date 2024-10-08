<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\ShopCategory;
use App\Models\City;
use App\Models\District;
use App\Models\Brand;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function shopcategory($name)
    {
        $shops = Shop::where('category', 'like', '%' . $name . '%')->paginate(20);
        // dd($shops);
        // $brand = Shop::where('category', 'like', '%' . $name . '%')->brand()->get();
        return view('webpages.product', compact('shops'));


    }

    //add filter 

    // public function filter(Request $request)
    // {
    //     $query = Shop::query();

    //     if ($request->has('brand') && $request->brand != '') {
    //         $query->where('brand', $request->brand);
    //     }

    //     if ($request->has('district') && $request->district != '') {
    //         $query->where('district_id', $request->district);
    //     }

    //     if ($request->has('city') && $request->city != '') {
    //         $query->where('city_id', $request->city);
    //     }

    //     if ($request->has('price_range')) {
    //         $query->whereBetween('price', [0, $request->price_range]);
    //     }

    //     $filteredShops = $query->get();

    //     return view('shop.list', compact('filteredShops'));
    // }

    // Function to return cities based on the district ID (used in AJAX)
    // public function getCities($districtId)
    // {
    //     $cities = tbl_ds::table('tbl_ds')->where('dis_id', $districtId)->get();
    //     return response()->json($cities);
    // }
    // public function showFilters()
    // {
    //     // Fetch brands from the 'brands' table
    //     $brands = DB::table('brands')->get();

    //     // Fetch districts from the 'tbl_district' table
    //     $districts = DB::table('tbl_district')->get();

    //     // Pass the data to the view
    //     return view('filters', compact('brands', 'districts'));
    // }

}
