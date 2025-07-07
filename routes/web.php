<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['laravel_version' => app()->version(), 'php_version' => phpversion()]);
});
