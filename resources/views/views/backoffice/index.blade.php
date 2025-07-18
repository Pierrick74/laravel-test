@extends('layouts.backoffice-default')
@section('content')
    <h2 class="card-title font-weight-bold">Liste des produits en ventes</h2>

    <ul class="list-group mt-5">
        @foreach($products as $product)
            <li class="list-group-item">
                <div class="container ">
                    <div class="row">
                        <p class="col">{{$product->card -> name}}</p>
                        <p class="col">{{$product->seller -> name}}</p>
                        <div class="w-100 d-md-none"></div>
                        @if($product -> delivery_price == "Livraison gratuite")
                            <p class="col-auto ">{{$product -> delivery_price}}</p>
                        @else
                            <p class="col-auto ">Livraison {{$product -> delivery_price}} €</p>
                        @endif
                        <p class="col text-end pe-5">{{$product -> price}}€</p>
                        <div class="w-100 d-md-none"></div>
                        <button onclick="window.location='{{ url("/backoffice/product/{$product->id}") }}'" class="btn btn-block col">Détail</button>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    <button onclick="window.location='{{ url("/backoffice/product/new") }}'" class="btn btn-block mx-1 my-1S w-10 mt-5">Crée un produit</button>

@endsection
