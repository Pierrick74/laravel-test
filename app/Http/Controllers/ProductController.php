<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index(): String
    {
        return view('product-list');
    }

    public function indexWithId(String $id)
    {
        $card = DB::table('card')->where('id', $id)->first();
        $sellers = DB::table('seller')->where('card_id', $id)->get();
        return view('product-details', ['card' => $card, 'sellers' => $sellers]);
    }
}

