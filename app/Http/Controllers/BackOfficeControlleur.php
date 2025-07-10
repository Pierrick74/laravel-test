<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Products;
use Illuminate\Http\Request;

class BackOfficeControlleur extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('views.backoffice.index', ['products' => $products]);
    }

    public function indexWithId(Products $product)
    {
        return view('views.backoffice.detail', ['product' => $product]);
    }

    public function editWithId(Products $product)
    {
        return view('views.backoffice.edit', ['product' => $product]);
    }

    public function saveEdit(Request $request, Products $product) {
        if ($request->filled('delivery_price')){
            $product->update([
                'delivery_price' => $request->delivery_price

            ]);
        }
        if ($request->filled('price')) {
            $product->update([
                'price' => $request->price
            ]);
        }
        $product->refresh()->load(['card', 'seller']);
        return view('views.backoffice.detail', ['product' => $product]);
    }
}
