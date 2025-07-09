<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/name', [\App\Http\Controllers\HomeController::class, 'index_name']);
Route::get('/extension', [\App\Http\Controllers\HomeController::class, 'index_extension']);

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/product/{card}', [\App\Http\Controllers\ProductController::class, 'indexWithId']);

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index']);
