<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [\App\Http\Controllers\HomeController::class, 'search'])->name('products.search');
Route::get('/sort/{sortBy}', [\App\Http\Controllers\HomeController::class, 'index_sort'])-> name('sort');

Route::prefix('product')->middleware(\App\Http\Middleware\adminMiddleware::class) ->group(function () {
    Route::post('/saveNew', [\App\Http\Controllers\ProductController::class, 'saveNewProduct'])->name('product.saveNewProduct');
    Route::get('/new', [\App\Http\Controllers\ProductController::class, 'newProduct'])->name('product.new');
});

Route::get('/product/{card}', [\App\Http\Controllers\ProductController::class, 'indexWithId']);

Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']) -> name('shop.index');
Route::get('/shop/{product}', [\App\Http\Controllers\ShopController::class, 'addToShop']);
Route::delete('/shop/delete/{shop}', [\App\Http\Controllers\ShopController::class, 'destroy'])->name('shop.delete');
Route::get('/shop/validate/{shop}', [\App\Http\Controllers\ShopController::class, 'validateShop'])->name('shop.validate');

Route::prefix('backoffice')->middleware(\App\Http\Middleware\adminMiddleware::class) ->group(function () {
    Route::post('/product/saveNew', [\App\Http\Controllers\BackOfficeControlleur::class, 'saveNewProduct'])->name('backoffice.product.saveNewProduct');
    Route::get('/product/new', [\App\Http\Controllers\BackOfficeControlleur::class, 'newProduct'])->name('backoffice.product.new');
    Route::get('/product', [\App\Http\Controllers\BackOfficeControlleur::class, 'index'])->name('backoffice.product.index');
    Route::get('/product/{product}', [\App\Http\Controllers\BackOfficeControlleur::class, 'indexWithId'])->name('backoffice.product.show')->where('product', '[0-9]+');;
    Route::get('/product/{product}/edit', [\App\Http\Controllers\BackOfficeControlleur::class, 'editWithId'])->name('backoffice.product.edit');
    Route::post('/product/{product}/saveEdit', [\App\Http\Controllers\BackOfficeControlleur::class, 'saveEdit'])->name('backoffice.product.saveEdit');
    Route::delete('/product/{product}', [\App\Http\Controllers\BackOfficeControlleur::class, 'destroy'])->name('backoffice.product.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';
