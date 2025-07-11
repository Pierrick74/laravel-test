@extends('layouts.backoffice-default')
@section('content')
    <h2 class="card-title font-weight-bold">Liste des produits en ventes</h2>

    <ul class="list-group mt-5">
        @foreach($products as $product)
            <li class="list-group-item">
                <div class="row ">
                    <div class="col d-flex flex-wrap align-self-center">
                        <p class="my-0 col-4">{{$product->card -> name}}</p>
                        <p class="my-0 col-4">{{$product->seller -> name}}</p>
                        @if($product -> delivery_price == "Livraison gratuite")
                            <p class="col my-0 col-4">{{$product -> delivery_price}}</p>
                        @else
                            <p class="col my-0 col-4">{{$product -> delivery_price}} €</p>
                        @endif
                    </div>
                    <div class="col-4 col-lg-6 d-flex flex-wrap justify-content-end">
                        <p class="text-center m-0 w-10 flex-grow-1 align-self-center">{{$product -> price}}</p>
                        <button onclick="window.location='{{ url("/backoffice/product/{$product->id}") }}'" class="btn btn-block mx-1 my-1S w-10">Détail</button>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    <button onclick="window.location='{{ url("/backoffice/product/new") }}'" class="btn btn-block mx-1 my-1S w-10 mt-5">Crée un produit</button>

@endsection
