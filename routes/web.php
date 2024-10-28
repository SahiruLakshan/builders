<?php

use App\Http\Controllers\ServiceController;
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
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ServiceProviderController;
// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/dashboard', function () {
//     return view('admin.admindashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('webpages.home');
})->name('home');



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
    Route::post('/shopapprove/{id}', [ShopController::class, 'approveShop']);
    Route::post('/cancelapprove/{id}', [ShopController::class, 'cancelShop']);
    Route::post('/productapprove/{id}', [ShopController::class, 'approveProduct']);
    Route::post('/cancelproductapprove/{id}', [ShopController::class, 'cancelProduct']);
    Route::get('/approvedshops', [ShopController::class, 'approvedshop']);

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
    Route::get('/addshopproduct/{id}', [ShopproductController::class, 'index']);
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

    Route::post('/addserviceprovider/store', [ServiceProviderController::class, 'store'])->name('addserviceprovider.store');



    //advertisement routes
    // Route::get('/addadvertisement', [AdvertisementController::class, 'index'])->name('addadvertisement');

    Route::get('/addadvertisement', function () {
        return view('admin.addadvertisement');
    })->name('addadvertisement');

    Route::post('/upload', [FileUploadController::class, 'upload'])->name('upload');

    // Route::get('/addservice', function () {
    //     return view('admin.addservice');
    // })->name('addservice');
    // Route to display the add service form (optional)
    Route::get('/addservice', [ServiceController::class, 'create'])->name('addservice');

    // Route to handle form submission
    Route::post('/addservice', [ServiceController::class, 'store']);
    Route::get('/viewservice', [ServiceController::class, 'viewservice']);
    // Route::get('service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit'); // Display update form
    // Route::put('service/{id}', [ServiceController::class, 'update'])->name('service.update');  // Handle update request



    //  admin panel service poriders
    // Route::get('/addserviceprovider', [ServiceProviderController::class, 'addservceproviders'])->name('addserviceprovider');
    Route::get('/addserviceprovider', [ServiceProviderController::class, 'addserviceproviders'])->name('addserviceprovider');


});

// routes/web.php

// website
//filter
// Route::get('/filter', [WebController::class, 'filter'])->name('filter');
// Route::get('/get-cities/{districtId}', [WebController::class, 'getCities']);
// Route::get('/filters', [WebController::class, 'showFilters']);


// Route::get('/front', function(){
//     return view('webpages.home');
// });
//search optoins route 
Route::get('/search', [WebController::class, 'search'])->name('search');

// get cityes fir the dropdown

Route::get('/product', function () {
    return view('webpages.product');
});
//bass form loarding
Route::get('/shopSuppliers', [WebController::class, 'shopSuppliers'])->name('shopSuppliers');
Route::post('/addshopSuppliers', [WebController::class, 'addshopSuppliers'])->name('addshopSuppliers');

//service provider form loading
// Route::get('/serviceprovider', function () {
//     return view('webpages.serviceprovider');
// })->name('serviceprovider');
Route::get('/serviceprovider', [WebController::class, 'servceproviders'])->name('serviceprovider');


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
