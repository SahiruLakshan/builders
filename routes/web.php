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
use App\Http\Controllers\AdvertisementUploadController;
use App\Http\Controllers\BassController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\BrandProductController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\ProfessionalCategoryController;
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
Route::middleware(['auth'])->group(function () {
    Route::resource('services', ServiceController::class);
});

//Admin routes
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.admindashboard');
    })->name('dashboard');
    Route::get('/addshop', [ShopController::class, 'index'])->name('addshop');
    Route::get('/shopprofile/{id}', [ShopController::class, 'shopprofile'])->name('shopprofile');
    Route::post('/submitshop', [ShopController::class, 'submitshop']);
    Route::get('/viewshops', [ShopController::class, 'shops']);
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
    // meka mn liwwe band page eknma multiple product select krnna
    // Route::get('/addbrand', [BrandProductController::class, 'showproduct'])->name('brand');

    //this one for the connect band with product

    Route::get('/brandproduct', [BrandProductController::class, 'showForm'])->name('brandproduct.form');
    // Route to save the brand-product connection
    // Route::post('/save-brand-product', [BrandProductController::class, 'store'])->name('save.brandproduct');
    // Route to handle the form submission and store data in the brandproduct table
    // Route::post('/brandproduct/store', [BrandProductController::class, 'store'])->name('brandproduct.store');
    Route::post('/admin/brandproduct/store', [BrandProductController::class, 'store'])->name('brandproduct.store');

    // // //measurement routes
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
    Route::get('/viewshopProducts', [ShopproductController::class, 'viewshopProducts']);
    // Route::post('/submitshopproduct', [ShopproductController::class, 'submitProducts'])->name('submit.products');
    Route::post('/submitshopitem', [ShopproductController::class, 'submitProducts'])->name('submit.shopitem');
    Route::get('/shopitem', [ShopproductController::class, 'shopitem'])->name('shopitem');
    Route::get('/check-pro-no-unique', [ShopproductController::class, 'checkProNoUnique']);
    Route::get('/get-items/{productId}', [ShopproductController::class, 'getItems']);
    Route::post('/add-shop-items', [ShopproductController::class, 'addItems'])->name('shop.addItems');



    Route::get('/addproduct', [ProductController::class, 'index']);
    Route::get('/products', [ProductController::class, 'products']);
    Route::post('/submitproduct', [ProductController::class, 'submitproducts']);
    Route::get('/getproduct/{id}', [ProductController::class, 'getproducts']);
    Route::put('/update/product/{id}', [ProductController::class, 'update']);
    Route::get('/delete/product/{id}', [ProductController::class, 'destroy']);

    Route::get('/addproductcategory', [ProductcategoryController::class, 'index']);
    Route::post('/submitproductcategory', [ProductcategoryController::class, 'submitproductcate']);
    Route::get('/productcategories', [ProductcategoryController::class, 'categories']);
    Route::get('/getproductcategory/{id}', [ProductcategoryController::class, 'getProductCategory']);
    Route::put('/update/productcategory/{id}', [ProductcategoryController::class, 'updateProductCategory']);
    Route::get('/delete/productcategory/{id}', [ProductcategoryController::class, 'deleteproductcate']);

    Route::get('/addproductsub', [ProductcategoryController::class, 'index2']);
    Route::post('/submitsub', [ProductcategoryController::class, 'store']);
    Route::get('/subcategories', [ProductcategoryController::class, 'subcat']);
    Route::get('/getsubcategory/{id}', [ProductcategoryController::class, 'getsubcategory']);
    Route::put('/update/productsubcategory/{id}', [ProductcategoryController::class, 'updatesubProductCategory']);
    Route::get('/delete/productsubcategory/{id}', [ProductcategoryController::class, 'destroy']);

    Route::get('/addserviceprovider', [ServiceProviderController::class, 'addserviceproviders'])->name('addserviceprovider');

    Route::post('/addserviceprovider/store', [ServiceProviderController::class, 'store'])->name('addserviceprovider.store');
    Route::get('/serviceproviders', [ServiceProviderController::class, 'view'])->name('serviceproviders.show');
    Route::post('/approveserviceprovider/{id}', [ServiceProviderController::class, 'approveServiceProviders'])->name('services.approve');
    Route::post('/rejectserviceprovider/{id}', [ServiceProviderController::class, 'rejectServiceProviders'])->name('services.reject');
    Route::get('/deleteserviceprovider/{id}', [ServiceProviderController::class, 'destroy'])->name('service.destroy');
    Route::post('/submitproject', [ServiceProviderController::class, 'submitproject'])->name('submit.project');
    Route::get('/updateserviceprovider/{id}', [ServiceProviderController::class, 'updateserviceprovider'])->name('serviceprovider.update');
    Route::put('/editserviceprovider/{id}', [ServiceProviderController::class, 'editserviceprovider'])->name('serviceprovider.edit');
    //advertisement routes
    // Route::get('/addadvertisement', [AdvertisementController::class, 'index'])->name('addadvertisement');

    Route::get('/addadvertisement', function () {
        return view('admin.addadvertisement');
    })->name('addadvertisement');
    Route::post('/upload', [AdvertisementUploadController::class, 'upload'])->name('upload');


    // Route to handle form submission
    // Route::post('/addservice', [ServiceController::class, 'store']);
    Route::get('/addservice', [ServiceController::class, 'create'])->name('addservice');
    Route::get('/viewservice', [ServiceController::class, 'viewservice']);
    // Route::get('service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit'); // Display update form
    Route::post('/service', [ServiceController::class, 'store'])->name('service.store');
    Route::get('service/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('/service/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/service/{id}', [ServiceController::class, 'delete'])->name('service.delete');
    //professionals routes

    // Route::get('', [ProfessionalController::class, 'index'])->name('');
    // Route::('', [ProfessionalController::class, ''])->name('');
    // Route::put('/professionalscategory/{id}', [ProfessionalController::class, 'update'])->name('service.update');
    // Route::get('', [ProfessionalController::class, ''])->name('');
    Route::get('/addprofessionals', [ProfessionalController::class, 'addadminprofessionals'])->name('addprofessionals');
    Route::post('/submitprofessionals', [ProfessionalController::class, 'store'])->name('submitprofessionals');
    Route::get('/professionals', [ProfessionalController::class, 'viewpro'])->name('viewprofessionals');

    Route::get('/addprofessionalsCategory', [ProfessionalCategoryController::class, 'index'])->name('addprofessionalsCategory');
    Route::post('/addprofessioncateory', [ProfessionalCategoryController::class, 'addprofessionals'])->name('viewprofessionalsCategory');
    Route::get('/viewprofessionalsCategory', [ProfessionalCategoryController::class, 'view'])->name('categories.store');
    Route::get('/getprofessionalcategories/{id}', [ProfessionalCategoryController::class, 'edit'])->name('professionalcategories.edit');
    Route::put('/updateprofessionalcategories/{id}', [ProfessionalCategoryController::class, 'update'])->name('professionalcategories.update');
    Route::get('/deleteprofessionalcategories/{id}', [ProfessionalCategoryController::class, 'destroy'])->name('professionalcategories.delete');

    // Route::post('/categories/update/{id}', [ProfessionalCategoryController::class, 'update'])->name('categories.update');
    // Route::get('/categories/delete/{id}', [ProfessionalCategoryController::class, 'destroy'])->name('categories.destroy');

    Route::post('/addbasscategory', [BassController::class, 'store']);
    // Route::get('/addshop', [ShopController::class, 'index'])->name('addshop');
    Route::post('/addbass', [BassController::class, 'addbass'])->name('addbass.store');
    Route::get('/adminAddbass', [BassController::class, 'index'])->name('adminAddbass');
    Route::get('/Viewadminbass', [BassController::class, 'Viewadminbass'])->name('Viewadminbass');
    Route::get('/viewbasscategory', [BassController::class, 'viewbasscate'])->name('viewbasscate');
    Route::delete('/deletebasscategory/{id}', [BassController::class, 'deleteBassCategory'])->name('bassCategory.delete');
    Route::delete('/deletebass/{id}', [BassController::class, 'deleteBass'])->name('bass.delete');
    Route::get('/editbasscategory/{id}', [BassController::class, 'editBassCategory'])->name('bassCategory.edit');
    Route::put('/updatebasscategory/{id}', [BassController::class, 'updateBassCategory'])->name('basscategory.update');
    // Route::get('/adminAddbass', function () {
    //     return view('admin.addbass');
    // });
    //  admin panel service poriders
    // Route::get('/addserviceprovider', [ServiceProviderController::class, 'addservceproviders'])->name('addserviceprovider');





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
//  me tika admin panal ekata enna oniii

Route::get('/addbassCategory', function () {
    return view('admin.addbassCategory');
});
Route::get('/addAllproject', function () {
    return view('admin.addAllproject');
});


Route::get('/shops', function () {
    return view('webpages.shops');
});

//bass form loarding
Route::get('/shopSuppliers', [WebController::class, 'shopSuppliers'])->name('shopSuppliers');
Route::post('/addshopSuppliers', [WebController::class, 'addshopSuppliers'])->name('addshopSuppliers');
Route::get('/serviceproviderform', [WebController::class, 'servceproviders'])->name('serviceproviderform');

Route::name('category.')->group(function () {
    Route::get('product/cat/{name}', [WebController::class, 'shopcategory'])->name('shop');
    Route::get('service/cat/{name}', [WebController::class, 'servicecategory'])->name('service');
    //shopitem show form this route
    Route::get('productcategory/cat/{id}', [WebController::class, 'productcategoryItem'])->name('productcategoryItem');

});

// Bass view route
Route::get('/viewbass', [WebController::class, 'viewbass'])->name('viewbass');

//professional
Route::get('/viewprofessionals', [WebController::class, 'professionals'])->name('viewprofessionals');

// about us page route
Route::get('/aboutus', function () {
    return view('webpages.about');
})->name('aboutus');
//this one need to add when approve the service provider
Route::get('/serviceproviderproject', function () {
    return view('admin.serviceproviderproject');
})->name('serviceproviderproject');

//Authentication Routes
Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

// Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
//     ->name('logout');

//profile view routes
// service provider profile
Route::get('/serviceproviderprofile', function () {
    return view('serviceproviders.serviceproviderprofile');
})->name('serviceproviderprofile');
// shop profile
// Route::get('/shopprofile', function () {
//     return view('webpages.shopprofile');
// })->name('shopprofile');

// Route::get('/professionalsform', [ProfessionalController::class, 'webprofessional'])->name('professionalsform');

Route::get('/professionalsform', [ProfessionalController::class, 'professionalForm'])->name('professionalsform');
// websie eke bass form eka
Route::get('/bassform', function () {
    return view('webpages.bassform');
});

Route::get('/view_Shop_profile/{id}', [WebController::class, 'view_Shop_profile'])->name('view_Shop_profile');
// Route::get('/view_Service_provider_profile/{id}', [WebController::class, 'view_Service_provider_profile'])->name('view_Service_provider_profile');




require __DIR__ . '/auth.php';
