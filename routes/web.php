<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sort/{sortBy}', [\App\Http\Controllers\HomeController::class, 'index_sort'])-> name('sort');

Route::get('/product/{card}', [\App\Http\Controllers\ProductController::class, 'indexWithId']);

Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']) -> name('shop.index');
Route::get('/shop/{product}', [\App\Http\Controllers\ShopController::class, 'addToShop']);
Route::delete('/shop/delete/{shop}', [\App\Http\Controllers\ShopController::class, 'destroy'])->name('shop.delete');
Route::get('/shop/validate/{shop}', [\App\Http\Controllers\ShopController::class, 'validateShop'])->name('shop.validate');

Route::prefix('backoffice')->group(function () {
    Route::post('/product/saveNew', [\App\Http\Controllers\BackOfficeControlleur::class, 'saveNewProduct'])->name('backoffice.product.saveNewProduct');
    Route::get('/product/new', [\App\Http\Controllers\BackOfficeControlleur::class, 'newProduct'])->name('backoffice.product.new');
    Route::get('/product', [\App\Http\Controllers\BackOfficeControlleur::class, 'index'])->name('backoffice.product.index');
    Route::get('/product/{product}', [\App\Http\Controllers\BackOfficeControlleur::class, 'indexWithId'])->name('backoffice.product.show')->where('product', '[0-9]+');;
    Route::get('/product/{product}/edit', [\App\Http\Controllers\BackOfficeControlleur::class, 'editWithId'])->name('backoffice.product.edit');
    Route::post('/product/{product}/saveEdit', [\App\Http\Controllers\BackOfficeControlleur::class, 'saveEdit'])->name('backoffice.product.saveEdit');
    Route::delete('/product/{product}', [\App\Http\Controllers\BackOfficeControlleur::class, 'destroy'])->name('backoffice.product.destroy');
});
