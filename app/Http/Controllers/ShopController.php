<?php

namespace App\Http\Controllers;

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
            if ($shop) {
                return view('shop', ['shop' => $shop]);
            }
        }
        //TODO panier vide
    }
}
