<?php

use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/addshop', [ShopController::class, 'addshop']);
Route::post('/submitshop', [ShopController::class, 'submitshop']);
Route::put('/shop/update/{id}', [ShopController::class, 'updateShop']);

