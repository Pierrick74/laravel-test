@extends('layouts.default')
@section('content')
    <div class="d-flex flex-wrap gap-5 align-items-center justify-content-center">
        <div class="card text-center" style="width: 18rem;">
            <div class="d-block text-center h-75 d-inline-block">
                <img src="../assets/photos/{{$card -> photo}}" class="card-img-top mw-75" alt="...">
            </div>
        </div>

        <div class="card" style="width: 18rem;">
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
        <div class="d-flex align-items-center" >
            <div class="card d-flex flex-column">
                <div class="d-flex justify-content-center pt-4 px-3">
                    <div class="d-flex flex-column w-75">
                        @if(isset($products[0]))
                        <h3>{{$products[0]->seller -> name}}</h3>
                        <p>{{$products[0]-> delivery_price}}</p>
                        @endif
                    </div>
                    <p class="w-20 p-2 display-6 text-center align-self-center">{{$products[0] -> price}}</p>
                </div>
                <a href="#" class="btn btn-block mx-4 my-2">Acheter</a>
            </div>
        </div>
    </div>
    <ul class="list-group mt-5">
        @foreach($products as $product)
        <li class="list-group-item">
            <div class="row ">
                <div class="col d-flex flex-wrap align-self-center">
                <p class="my-0">{{$product->seller -> name}}</p>
                    @if($product -> delivery_price == "Livraison gratuite")
                            <p class="col mx-4 my-0">{{$product -> delivery_price}}</p>
                        @else
                            <p class="col mx-4 my-0">{{$product -> delivery_price}} €</p>
                    @endif
                </div>
                <div class="col-4 col-lg-6 d-flex flex-wrap justify-content-end">
                <p class="text-center m-0 w-10 flex-grow-1 align-self-center">{{$product -> price}}</p>
                    <btn href="#" class="btn btn-block mx-1 my-1S w-10"><img src="../assets/add_shop.png" alt=""></btn>
                </div>
            </div>
        </li>
        @endforeach
    </ul>

@endsection
