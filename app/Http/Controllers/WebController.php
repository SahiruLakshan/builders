<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\ShopCategory;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function shopcategory($name)
    {
        $shop = Shop::where('category', 'like', '%' . $name . '%')->get();
        dd($shop);
    }
}
