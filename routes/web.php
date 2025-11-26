<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;

Route::get('/', function () {
    $products = Product::all();
    return view('products.home', compact('products'));
});
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
