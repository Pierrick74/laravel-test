<?php

namespace App\Http\Controllers\Api;

use App\Models\Card;
use App\Models\Products;
use App\Models\Sellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController
{
    public function getProducts() {
        return Products::with(['card', 'seller'])->get();
    }

    public function getProduct($productId) {
        return Products::find($productId)->with(['card', 'seller'])->first();
    }

    public function createProduct(Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'number' => 'required|numeric|min:1',
            'extension' => 'required',
            'type' => 'required',
            'PV' => 'required|numeric|min:1',
            'photo' => 'required',
            'sellerName' => 'required',
            'price' => 'required|numeric|min:1',
            'delivery_price' => 'required|numeric|min:1',

        ], [
            'name.required' => 'Le nom est obligatoire.',
            'number.required' => 'Le numéro est obligatoire.',
            'number.numeric' => 'Le numéro doit être un nombre.',
            'number.min' => 'Le numéro doit être au moins égal à 1.',
            'extension.required' => 'L\'extension est obligatoire.',
            'type.required' => 'Le type est obligatoire.',
            'PV.required' => 'La valeur PV est obligatoire.',
            'PV.numeric' => 'La valeur PV doit être un nombre.',
            'PV.min' => 'La valeur PV doit être au moins égale à 1.',
            'photo.required' => 'La photo est obligatoire.',
            'sellerName.required' => 'Le nom du vendeur est obligatoire.',
            'price.required' => 'Le prix est obligatoire.',
            'price.numeric' => 'Le prix doit être un nombre.',
            'price.min' => 'Le prix doit être au moins égal à 1.',
            'delivery_price.required' => 'Le prix de livraison est obligatoire.',
            'delivery_price.numeric' => 'Le prix de livraison doit être un nombre.',
            'delivery_price.min' => 'Le prix de livraison doit être au moins égal à 1.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur de validation',
                'errors' => $validator->errors()
            ], 422);
        }


        $card = Card::firstOrCreate([
            'name' => $request->name,
            'number' => $request->number,
            'extension' => $request->extension,
            'type' => $request->type,
            'PV' => $request->PV,
            'photo' => $request->photo,
        ]);

        $product = new Products();

        $product -> seller_id = $this -> modifySeller($request->sellerName) -> id;
        $product -> price  = $request->price;
        $product -> delivery_price  = $request->delivery_price;
        $product -> card_id = $card -> id;
        $product -> save();

        return response()->json([
            'success' => true,
            'message' => 'produit crée',
        ], 200);
    }

    private function modifySeller(String $name):Sellers
    {
        $seller = Sellers::firstOrCreate( ['name' => $name] );
        return $seller;
    }
}
