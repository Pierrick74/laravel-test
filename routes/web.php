<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/name', [\App\Http\Controllers\HomeController::class, 'index_name']);
Route::get('/extension', [\App\Http\Controllers\HomeController::class, 'index_extension']);

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/product/{card}', [\App\Http\Controllers\ProductController::class, 'indexWithId']);

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index']);

Route::get('/backoffice/product', [\App\Http\Controllers\BackOfficeControlleur::class, 'index']) -> name('backoffice.product.index');
Route::get('/backoffice/product/{product}', [\App\Http\Controllers\BackOfficeControlleur::class, 'indexWithId']) -> name('backoffice.product.show');
Route::get('/backoffice/product/{product}/edit', [\App\Http\Controllers\BackOfficeControlleur::class, 'editWithId']) -> name('backoffice.product.edit');
Route::post('/backoffice/product/{product}/saveEdit', [\App\Http\Controllers\BackOfficeControlleur::class, 'saveEdit']) -> name('backoffice.product.saveEdit');
Route::delete('/backoffice/product/{product}', [\App\Http\Controllers\BackOfficeControlleur::class, 'destroy'])->name('product.destroy');
