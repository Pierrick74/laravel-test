<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Products;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function index()
    {
        $user = User::where('name', "moi")->first();

        if ($user) {
            $shop = $user->shop()->where('status', 'wait')->first();
            return view('shop', ['shop' => $shop]);
        }
        //TODO panier vide
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
}

