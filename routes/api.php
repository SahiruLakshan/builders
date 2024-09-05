<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//shop routes
Route::get('/addshop', [ShopController::class, 'index']);
Route::post('/submitshop', [ShopController::class, 'submitshop']);
Route::get('/shopupdateform/{id}', [ShopController::class, 'update']);
Route::put('/shop/update/{id}', [ShopController::class, 'updateShop']);
Route::get('/shop/delete/{id}', [ShopController::class, 'deleteShop']);

//brand routes
Route::get('/addbrand', [BrandController::class, 'index']);
Route::post('/submitbrand', [BrandController::class, 'submitBrand']);
Route::get('/shopupdateform/{id}', [BrandController::class, 'update']);
Route::put('/brand/update/{id}', [BrandController::class, 'updateBrand']);
Route::get('/brand/delete/{id}', [BrandController::class, 'deleteBrand']);
