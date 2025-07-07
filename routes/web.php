<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'indexWithId']);

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index']);
