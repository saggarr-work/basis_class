<?php

use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/shop', [ShopController::class,'index'])->name('shop');


// Backend Routes 

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});



Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
Route::get('/products', [ProductController::class,'index'])->name('products');
