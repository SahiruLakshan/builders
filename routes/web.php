<?php


use App\Http\Controllers\BrandController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\ProductcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopCategoryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopproductController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\WebController;
use App\Models\Productcategory;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/dashboard', function () {
//     return view('admin.admindashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('webpages.home');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Admin routes
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.admindashboard');
    })->name('dashboard');
    Route::get('/addshop', [ShopController::class, 'index'])->name('addshop');
    Route::get('/shopprofile/{id}', [ShopController::class, 'shopprofile'])->name('shopprofile');
    Route::post('/submitshop', [ShopController::class, 'submitshop']);
    Route::get('/shops', [ShopController::class, 'shops']);
    Route::get('/shopupdate/{id}', [ShopController::class, 'update']);
    Route::put('/shop/update/{id}', [ShopController::class, 'updateShop']);
    Route::get('/shop/delete/{id}', [ShopController::class, 'deleteShop']);

    // //brand routes
    Route::get('/addbrand', [BrandController::class, 'index'])->name('addbrand');
    Route::post('/submitbrand', [BrandController::class, 'submitBrand']);
    Route::get('/brands', [BrandController::class, 'brands']);
    Route::get('/brandupdate/{id}', [BrandController::class, 'update']);
    Route::put('/brand/update/{id}', [BrandController::class, 'updateBrand']);
    Route::get('/brand/delete/{id}', [BrandController::class, 'deleteBrand']);

    // //measurement routes
    // Route::get('/addbrand', [MeasurementController::class, 'index']);
    Route::get('/addmeasurement', [MeasurementController::class, 'index']);
    Route::post('/submitmeasurement', [MeasurementController::class, 'addMeasurement']);
    Route::get('/measurements', [MeasurementController::class, 'measurements']);
    Route::get('/getmeasurement/{id}', [MeasurementController::class, 'getMeasurement']);
    Route::put('/measurement/update/{id}', [MeasurementController::class, 'updateMeasurement']);
    Route::get('/measurement/delete/{id}', [MeasurementController::class, 'deleteMeasurement']);

    // //measurement routes
    Route::get('/addshopcategory', [ShopCategoryController::class, 'index'])->name('addshopcatogory');
    Route::post('/submitshopcategory', [ShopCategoryController::class, 'insertShopCategory']);
    Route::get('/shopcategories', [ShopCategoryController::class, 'shopecate']);
    Route::get('/getshopcategory/{id}', [ShopCategoryController::class, 'getShopCategory']);
    Route::put('/shopcategory/update/{id}', [ShopCategoryController::class, 'updateShopCategory']);
    Route::get('/shopcategory/delete/{id}', [ShopCategoryController::class, 'deleteShopCategory']);
    Route::get('/addshopproduct', [ShopproductController::class, 'index']);
    Route::post('/submitshopproduct', [ShopproductController::class, 'submitProducts'])->name('submit.products');

    Route::get('/addproduct', [ProductController::class, 'index']);
    Route::get('/products', [ProductController::class, 'products']);
    Route::post('/submitproduct', [ProductController::class, 'submitproducts']);
    Route::get('/getproduct/{id}', [ProductController::class, 'getproducts']);
    Route::put('/update/product/{id}', [ProductController::class, 'update']);
    Route::get('/delete/product/{id}', [ProductController::class, 'destroy']);

    Route::get('/addproductcategory', [ProductcategoryController::class, 'index']);
    Route::post('/submitproductcategory', [ProductcategoryController::class, 'submitproductcate']);
    Route::get('/categories', [ProductcategoryController::class, 'categories']);
    Route::get('/getproductcategory/{id}', [ProductcategoryController::class, 'getProductCategory']);
    Route::put('/update/productcategory/{id}', [ProductcategoryController::class, 'updateProductCategory']);
    Route::get('/delete/productcategory/{id}', [ProductcategoryController::class, 'deleteproductcate']);

    Route::get('/addproductsub', [ProductcategoryController::class, 'index2']);
    Route::post('/submitsub', [ProductcategoryController::class, 'store']);
    Route::get('/subcategories', [ProductcategoryController::class, 'subcat']);
    Route::get('/getsubcategory/{id}', [ProductcategoryController::class, 'getsubcategory']);
    Route::put('/update/productsubcategory/{id}', [ProductcategoryController::class, 'updatesubProductCategory']);
    Route::get('/delete/productsubcategory/{id}', [ProductcategoryController::class, 'destroy']);
});


// website

// Route::get('/front', function(){
//     return view('webpages.home');
// });
Route::get('/product', function () {
    return view('webpages.product');
});
Route::get('/serviceprovider', function () {
    return view('webpages.serviceprovider');
})->name('serviceprovider');

Route::name('category.')->group(function () {
    Route::get('product/cat/{name}', [WebController::class, 'shopcategory'])->name('shop');
});

// about us page route
Route::get('/aboutus', function () {
    return view('webpages.about');
})->name('aboutus');

//Authentication Routes
Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

// Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
//     ->name('logout');
require __DIR__ . '/auth.php';
