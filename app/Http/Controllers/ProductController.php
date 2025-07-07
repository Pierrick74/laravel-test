<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): String
    {
        return view('product-list');
    }

    public function indexWithId(int $id): String
    {
        return view('product-details', ['id' => $id]);
    }
}

