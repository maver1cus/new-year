<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->controller(AuthController::class)->group(function () {
  Route::post('login', 'login')->name('login');
  Route::post('register', 'register');
  Route::post('logout', 'logout');
  Route::post('a', 'refresh');
});

Route::prefix('products')
  ->controller(ProductController::class)
  ->group(function () {
    Route::get('/', 'index');
    Route::get('{product}', 'show');
    Route::post('{product}/prices', 'store');
    Route::get('{product}/prices', 'showToProductId');
  });

Route::prefix('prices')->controller(PriceController::class)->group(function () {
  Route::put('/', 'updateMany');
  Route::delete('{price}', 'destroy');
  Route::get('{price}', 'show');
});





