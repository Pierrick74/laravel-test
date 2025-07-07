<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): String
    {
        return "Liste des produits";
    }

    public function indexWithId(int $id): String
    {
        return "Fiche du produit {$id}";
    }
}

