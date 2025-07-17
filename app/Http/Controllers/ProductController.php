<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Products;
use App\Models\Sellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{

    public function indexWithId(Card $card)
    {
        /* $test = Card::Find($card -> id); */
      /* $card = Card::where('id', $id)->first();*/
      /*  $card = DB::table('card')->where('id', $id)->first();*/

        $products = Products::where('card_id', $card -> id )->get();
        return view('product-details', ['card' => $card, 'products' => $products]);
    }

    public function saveNewProduct(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'number' => 'required|numeric|min:1',
            'extension' => 'required',
            'type' => 'required',
            'PV' => 'required|numeric|min:1',
            'photo' => 'required',
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
            'price.required' => 'Le prix est obligatoire.',
            'price.numeric' => 'Le prix doit être un nombre.',
            'price.min' => 'Le prix doit être au moins égal à 1.',
            'delivery_price.required' => 'Le prix de livraison est obligatoire.',
            'delivery_price.numeric' => 'Le prix de livraison doit être un nombre.',
            'delivery_price.min' => 'Le prix de livraison doit être au moins égal à 1.',
        ]);
        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            return redirect()
                ->route('product.new')
                ->withErrors($validator)
                ->withInput();
        }

        $photo = $request->file('photo');
        $photoName = $request->name.'.'.$photo->getClientOriginalExtension();
        $photo->move(public_path('assets/photos'), $photoName);

        $card = Card::firstOrCreate([
            'name' => $request->name,
            'number' => $request->number,
            'extension' => $request->extension,
            'type' => $request->type,
            'PV' => $request->PV,
            'photo' => $photoName,
        ]);

        $product = new Products();

        $product -> seller_id = $this -> modifySeller(Auth::user()->name) -> id;
        $product -> price  = $request->price;
        $product -> delivery_price  = $request->delivery_price;
        $product -> card_id = $card -> id;
        $product -> save();

        return redirect()
            ->route('home');
    }

    private function modifySeller(String $name):Sellers
    {
        $seller = Sellers::firstOrCreate( ['name' => $name] );
        return $seller;
    }

    public function newProduct()
    {
        return view('create');
    }
}

