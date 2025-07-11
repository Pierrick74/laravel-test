<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Products;
use App\Models\Sellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        $data = array_filter($request->all(), function($value) {
            return $value !== null && $value !== '';
        });

        $product->update($data);
        $product-> card -> update($data);

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
        $seller = Sellers::firstOrCreate( ['name' => $name] );
        return $seller;
    }

    public function newProduct()
    {
        return view('views.backoffice.create');
    }

    public function saveNewProduct(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'number' => 'required',
            'extension' => 'required',
            'type' => 'required',
            'PV' => 'required',
            'photo' => 'required',
            'sellerName' => 'required',
            'price' => 'required',
            'delivery_price' => 'required',

        ]);
        if ($validator->fails()) {
            // Méthode correcte : utiliser withErrors() et withInput()
            return redirect()
                ->route('backoffice.product.new')
                ->withErrors($validator)
                ->withInput();
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

        return redirect()
            ->route('backoffice.product.index');
    }
}
