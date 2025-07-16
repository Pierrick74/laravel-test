@extends('layouts.default')
@section('content')
    <h1 class="card-title font-weight-bold ">Panier</h1>
    @if($shop == null)
        <div class="card text-center align-items-center " >
            <p class="my-5">Votre panier est vide</p>
        </div>
    @else
        <div class="d-flex justify-content-center">
            <div class="card text-center  d-inline-block px-3" >
                <div class="d-flex justify-content-end flex-fill">
                    <form action="{{ route('shop.delete', $shop-> id) }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-block m-2" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')">X</button>
                    </form>
                </div>
                <div class="container">
                    <div class="row gap-2 align-items-stretch justify-content-center mb-4">
                        <div class="card text-center col-4" style="width: 18rem;">
                            <div class="d-block text-center h-75 d-inline-block m-1">
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
        </div>
        <div class="d-flex justify-content-center">
            <div class="mt-4 p-3 border border-2 rounded bg-light d-inline-block">
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
        </div>
        <div class="d-flex justify-content-center">
            <a onclick="window.location='{{ route("shop.validate", $shop -> id) }}'" class="btn btn-block mx-4 my-2">Acheter</a>
        </div>
    @endif



@endsection
