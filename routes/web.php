<?php


use App\Http\Controllers\BrandController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\ProductcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopCategoryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopproductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.admindashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// //shop routes

Route::get('/addshop', [ShopController::class, 'index'])->name('addshop');
Route::get('/shopprofile/{id}', [ShopController::class, 'shopprofile'])->name('shopprofile');
Route::post('/submitshop', [ShopController::class, 'submitshop']);
Route::get('/shopupdateform/{id}', [ShopController::class, 'update']);
Route::put('/shop/update/{id}', [ShopController::class, 'updateShop']);
Route::get('/shop/delete/{id}', [ShopController::class, 'deleteShop']);

// //brand routes
Route::get('/addbrand', [BrandController::class, 'index'])->name('addbrand');
Route::post('/submitbrand', [BrandController::class, 'submitBrand']);
Route::get('/shopupdateform/{id}', [BrandController::class, 'update']);
Route::put('/brand/update/{id}', [BrandController::class, 'updateBrand']);
Route::get('/brand/delete/{id}', [BrandController::class, 'deleteBrand']);

// //measurement routes
// Route::get('/addbrand', [MeasurementController::class, 'index']);
Route::get('/addmeasurement', [MeasurementController::class, 'index']);
Route::post('/submitmeasurement', [MeasurementController::class, 'addMeasurement']);
Route::get('/getmeasurement/{id}', [MeasurementController::class, 'getMeasurement']);
Route::put('/measurement/update/{id}', [MeasurementController::class, 'updateMeasurement']);
Route::get('/measurement/delete/{id}', [MeasurementController::class, 'deleteMeasurement']);

// //measurement routes
Route::get('/addshopcategory', [ShopCategoryController::class, 'index'])->name('addshopcatogory');
Route::post('/submitshopcategory', [ShopCategoryController::class, 'insertShopCategory']);
Route::get('/getshopcategory/{id}', [ShopCategoryController::class, 'getShopCategory']);
Route::put('/shopcategory/update/{id}', [ShopCategoryController::class, 'updateShopCategory']);
Route::get('/shopcategory/delete/{id}', [ShopCategoryController::class, 'deleteShopCategory']);

Route::get('/addshopproduct', [ShopproductController::class, 'index']);
Route::post('/submitproduct', [ShopproductController::class, 'submitProducts'])->name('submit.products');

Route::get('/addproduct', [ProductController::class, 'index']);

// Route::get('/addproductcategory', [ProductcategoryController::class, 'index']);
Route::get('/addproductsub', [ProductcategoryController::class, 'index2']);
Route::post('/submitsub', [ProductcategoryController::class, 'store']);


require __DIR__ . '/auth.php';


