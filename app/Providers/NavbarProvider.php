<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\ServiceProvider as ModelsServiceProvider;
use App\Models\ShopCategory;

use App\Models\Product;
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
        $shopcats = ShopCategory::get('name');
        $services = service::get('servicename');
        $productcats = Product::get(['name', 'id']);
        // dd($productcats->toArray());
        view()->share([
            'shopcats' => $shopcats,
            'services' => $services,
            'productcats' => $productcats
        ]);

        // dd($services);
        // $services= Service

    }
}
