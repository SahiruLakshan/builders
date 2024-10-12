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


    //add filter 




}
