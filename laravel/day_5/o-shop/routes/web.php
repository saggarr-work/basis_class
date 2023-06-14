<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/shoppppppp', [ShopController::class,'index'])->name('shop');


// Backend Routes 

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});
