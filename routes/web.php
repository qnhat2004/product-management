<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('products', ProductController::class);
Route::get('products', [ProductController::class, 'index']);
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
