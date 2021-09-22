<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ThemeController;


// change theme
Route::get('/theme/{val}', [ThemeController::class, "theme"])->name('theme');


// cart controller 
// add to cart 
// Route::get('/acheter/{product}', [CartController::class, "addToCart"])->name('cart-add'); 

