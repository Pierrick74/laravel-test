<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', [\App\Http\Controllers\Api\ProductController::class, 'getProducts']);
Route::get('/product/{product}', [\App\Http\Controllers\Api\ProductController::class, 'getProduct']);
Route::post('/product/create', [\App\Http\Controllers\Api\ProductController::class, 'createProduct']);
Route::post('/product/modify/{id}', [\App\Http\Controllers\Api\ProductController::class, 'modifyProduct']);
Route::delete('/product/remove/{id}', [\App\Http\Controllers\Api\ProductController::class, 'removeProduct']);
