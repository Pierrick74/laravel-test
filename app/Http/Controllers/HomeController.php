<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Card;

class HomeController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return view('homepage',  ['cards' => $cards]);
    }

    public function index_sort(String $sortBy)
    {
        $cards = Card::orderBy($sortBy, 'asc')->get();

        return view('homepage',  ['cards' => $cards]);
    }
}
