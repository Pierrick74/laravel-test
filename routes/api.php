<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Api\ProductController::class, 'getProducts'])->name('get-products');
Route::get('/product/{productId}', [\App\Http\Controllers\Api\ProductController::class, 'getProduct'])-> name('get-product');
Route::post('/product/create', [\App\Http\Controllers\Api\ProductController::class, 'createProduct'])->name('create-product');
Route::post('/product/modify/{id}', [\App\Http\Controllers\Api\ProductController::class, 'modifyProduct'])->name('modify-product');
Route::delete('/product/delete/{id}', [\App\Http\Controllers\Api\ProductController::class, 'removeProduct'])->name('delete-product');
