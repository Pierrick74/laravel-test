@extends('layouts.backoffice-default')
@section('content')
    <div class="d-flex flex-wrap gap-5 align-items-stretch justify-content-center">
        <div class="card text-center">
            <div class="d-block text-center h-75 d-inline-block">
                <img src="{{ asset('assets/photos/' . $product->card->photo) }}" class="card-img-top mw-75" alt="...">
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h1 class="card-title font-weight-bold text-center">#{{$product -> id}}</h1>
                <h2 class="card-title font-weight-bold">Détail de la carte</h2>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nom:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$product -> card -> name}}</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Numéro:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$product -> card -> number}}</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Collection:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$product -> card -> extension}}</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Type</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$product -> card -> type}}</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">PV</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$product -> card  -> PV}}</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nom du vendeur</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$product->seller -> name}}</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">prix</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$product -> price}} €</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">livraison</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$product-> delivery_price}}</p></span>
            </div>
            <span class="d-flex"><p class="card-title w-50 font-weight-bold">
                    <form action="{{route("backoffice.product.destroy", $product -> id)}}" method="Post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-block mx-4 my-2">Supprimer</button>
                </form>
            <button onclick="window.location='{{ route("backoffice.product.edit", $product -> id) }}'" class="btn btn-block mx-4 my-2">Modifier</button>
            </span>
        </div>
    </div>
@endsection
