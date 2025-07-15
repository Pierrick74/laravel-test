@extends('layouts.default')
@section('content')
    <h1 class="card-title font-weight-bold ">Panier</h1>

        <div class="card text-center" >
            <div class="d-flex justify-content-end flex-fill">
                <button href="#" class="btn btn-block m-2">X</button>
            </div>
            <div class="container">
                <div class="row gap-2 align-items-stretch justify-content-center">
                    <div class="card text-center col-4" style="width: 18rem;">
                        <div class="d-block text-center h-75 d-inline-block">
                            <img src="../assets/photos/{{$shop -> product -> card -> photo}}" class="card-img-top mw-75" alt="...">
                        </div>
                    </div>

                    <div class="card col-4" style="width: 18rem;">
                        <div class="card-body">
                            <h1 class="card-title font-weight-bold text-center">{{$shop -> product -> card -> name}}</h1>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title font-weight-bold">Détail de la carte</h2>
                            <span class="d-flex"><p class="card-title w-50 font-weight-bold">Numéro:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$shop -> product -> card -> number}}</p></span>
                            <span class="d-flex"><p class="card-title w-50 font-weight-bold">Collection:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$shop -> product -> card -> extension}}</p></span>
                            <span class="d-flex"><p class="card-title w-50 font-weight-bold">Type</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$shop -> product -> card -> type}}</p></span>
                            <span class="d-flex"><p class="card-title w-50 font-weight-bold">PV</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$shop -> product -> card -> PV}}</p></span>
                        </div>
                    </div>
                    <div class="card col-4 align-items-center" style="width: 18rem;">
                        <div class="card-body text-center">
                                <h3>{{$shop -> product -> seller -> name}}</h3>
                                @if($shop -> product -> delivery_price == "0")
                                    <p class="">Livraison gratuite</p>
                                @else
                                    <p class="">Livraison {{$shop -> product -> delivery_price}} €</p>
                                @endif
                                <p class="p-2 display-5">{{$shop -> product -> price}}€</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    <div class="mt-4 p-3 border border-2 rounded bg-light">
        <h2>Choisir votre livraison</h2>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Chronopost
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Mondial relais
            </label>
        </div>
    </div>

    <a href="#" class="btn btn-block mx-4 my-2">Acheter</a>

@endsection
