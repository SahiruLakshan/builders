<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\ShopCategory;
use App\Models\Shopproduct;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class NavbarProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // $shopcats = ShopCategory::get('name');
        // view()->share('shopcats', $shopcats);
        // dd($shopcats);
        // $services= Service

    }
}
