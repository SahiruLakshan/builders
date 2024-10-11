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




}
