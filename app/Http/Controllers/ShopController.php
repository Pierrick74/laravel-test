<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Shop;
use App\Models\User;


class ShopController extends Controller
{
    public function index()
    {
        $user = User::where('name', "moi")->first();

        if ($user) {
            $shop = $user->shop()->where('status', 'wait')->first();
            return view('shop', ['shop' => $shop]);
        }
    }

    public function addToShop(Products $product)
    {
        $shop = Shop::firstOrCreate([
            'product_id' => $product->id,
            'user_id' => 1,
            'status' => "wait",
        ]);
        return view('shop', ['shop' => $shop]);
    }

    public function destroy(Shop $shop)
    {
        $shop -> delete();
        return redirect() -> route('shop.index');
    }

    public function validateShop(Shop $shop) {
        $shop -> status = "validate";
        $shop -> save();
        return view('shop-valide', ['shop' => $shop]);
    }
}

