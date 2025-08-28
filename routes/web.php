<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProductController;

Route::get('/',[AppController::class,'index'])->name('index');

// Product Management
Route::get('/products',[ProductController::class,'index'])->name('products.index');

// Shift Management

// Sales
// Sale Item
