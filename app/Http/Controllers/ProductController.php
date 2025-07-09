<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Products;
use App\Models\Sellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index(): String
    {
        return view('product-list');
    }

    public function indexWithId(Card $card)
    {
        /* $test = Card::Find($card -> id); */
      /* $card = Card::where('id', $id)->first();*/
      /*  $card = DB::table('card')->where('id', $id)->first();*/

        $products = Products::where('card_id', $card -> id )->get();
        return view('product-details', ['card' => $card, 'products' => $products]);
    }
}

