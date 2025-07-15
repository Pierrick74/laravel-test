<?php

namespace App\Http\Controllers\Api;

use App\Models\Card;
use App\Models\Products;

class ProductController
{
    public function getProducts() {
        return Products::with(['card', 'seller'])->get();
    }

    public function getProduct($productId) {
        return Products::find($productId)->with(['card', 'seller'])->first();
    }
}
