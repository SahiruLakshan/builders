<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\ShopCategory;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function shopcategory($name)
    {
        $shops = Shop::where('category', 'like', '%' . $name . '%')->paginate(20);
        // dd($shops);
        return view('webpages.product', compact('shops'));
    }
}
