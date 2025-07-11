<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Products;
use App\Models\Sellers;
use Illuminate\Http\Request;

class BackOfficeControlleur extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('views.backoffice.index', ['products' => $products]);
    }

    public function indexWithId(Products $product)
    {
        return view('views.backoffice.detail', ['product' => $product]);
    }

    public function editWithId(Products $product)
    {
        return view('views.backoffice.edit', ['product' => $product]);
    }

    public function saveEdit(Request $request, Products $product) {
        if ($request->filled('delivery_price')){
            $product->update([
                'delivery_price' => $request->delivery_price

            ]);
        }
        if ($request->filled('price')) {
            $product->update([
                'price' => $request->price
            ]);
        }

        if ($request->filled('name')) {
            $product-> card -> update([
                'name' => $request->name
            ]);
        }

        if ($request->filled('number')) {
            $product-> card -> update([
                'number' => $request->number
            ]);
        }

        if ($request->filled('extension')) {
            $product-> card -> update([
                'extension' => $request->extension
            ]);
        }

        if ($request->filled('type')) {
            $product-> card -> update([
                'type' => $request->type
            ]);
        }

        if ($request->filled('PV')) {
            $product-> card -> update([
                'PV' => $request->PV
            ]);
        }

        if ($request->filled('sellerName')) {
            $product-> update([
                'seller_id' => $this -> modifySeller($request->sellerName) -> id
            ]);
        }

        $product->refresh()->load(['card', 'seller']);
        return view('views.backoffice.detail', ['product' => $product]);
    }

    public function destroy(Products $product)
    {
        $product -> delete();
        return redirect() -> route('backoffice.product.index');
    }

    private function modifySeller(String $name):Sellers
    {
        $seller = Sellers::where('name', $name) -> first();
        if ($seller == null) {
            $seller = new Sellers();
            $seller->name = $name;
            $seller->save();
            return $seller;
        }
        return $seller;
    }
}
