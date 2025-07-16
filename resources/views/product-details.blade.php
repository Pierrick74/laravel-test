@extends('layouts.default')
@section('content')
    <div class="container">
    <div class="row gap-2 align-items-stretch justify-content-center">
        <div class="card text-center col-4" style="width: 18rem;">
            <div class="d-block text-center h-75 d-inline-block">
                <img src="../assets/photos/{{$card -> photo}}" class="card-img-top mw-75 p-2" alt="...">
            </div>
        </div>

        <div class="card col-4" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title font-weight-bold text-center">{{$card -> name}}</h1>
            </div>
            <div class="card-body">
                <h2 class="card-title font-weight-bold">Détail de la carte</h2>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Numéro:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$card -> number}}</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Collection:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$card -> extension}}</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Type</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$card -> type}}</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">PV</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$card -> PV}}</p></span>
            </div>
        </div>
        <div class="card col-4  " style="width: 18rem;">
                <div class="card-body text-center ">
                        @if(isset($products[0]))
                        <h3>{{$products[0]->seller -> name}}</h3>
                        @if($products[0] -> delivery_price == "0")
                            <p class="">Livraison gratuite</p>
                        @else
                            <p class="">Livraison {{$products[0] -> delivery_price}} €</p>
                        @endif
                        <p class="p-2 display-5">{{$products[0] -> price}}€</p>
                        @endif
                            <button onclick="window.location='{{ url("/shop/{$products[0]->id}") }}'" class="btn btn-block mx-4 my-2">Acheter</button>
                </div>

        </div>
    </div>
    </div>
    <ul class="list-group mt-5">
        @foreach($products as $product)
        <li class="list-group-item container">
            <div class="row">
                <p class="col-5">{{$product->seller -> name}}</p>
                @if($product -> delivery_price == "0")
                    <p class="col-3">Livraison gratuite</p>
                    @else
                    <p class="col-3">Livraison {{$product -> delivery_price}} €</p>
                    @endif
                <p class="text-end col-2 ">{{$product -> price}} €</p>
                <div class="col-2 align-items-end">
                    <button onclick="window.location='{{ url("/shop/{$products[0]->id}") }}'" class="btn btn-block w-10 align-items-center"><img src="../assets/add_shop.png" alt=""></button>
                </div>
            </div>
        </li>
        @endforeach
    </ul>

@endsection
