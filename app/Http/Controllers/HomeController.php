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

    public function index_name()
    {
        $cards = Card::orderBy('name', 'asc')->get();

        return view('homepage',  ['cards' => $cards]);
    }

    public function index_extension()
    {
        $cards = Card::orderBy('extension', 'asc')->get();

        return view('homepage',  ['cards' => $cards]);
    }
}
