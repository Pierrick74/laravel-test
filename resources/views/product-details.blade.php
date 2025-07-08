@extends('layouts.default')
@section('content')
<div class="d-flex flex-wrap gap-5">
    <div class="card text-center" style="width: 18rem;">
        <div class="d-block text-center h-75 d-inline-block">
            <img src="../assets/photos/dacaufeu.webp" class="card-img-top mw-75" alt="...">
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h1 class="card-title font-weight-bold">{{$id}}</h1>
        </div>
        <div class="card-body">
            <h2 class="card-title font-weight-bold">Détail de la carte</h2>
            <span class="d-flex"><p class="card-title w-50 font-weight-bold">Numéro:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">006/151</p></span>
            <span class="d-flex"><p class="card-title w-50 font-weight-bold">Collection:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">Soleil et lune</p></span>
            <span class="d-flex"><p class="card-title w-50 font-weight-bold">Type</p><p class="m-0 px-2 w-50 text-right font-weight-bold">Feu</p></span>
            <span class="d-flex"><p class="card-title w-50 font-weight-bold">PV</p><p class="m-0 px-2 w-50 text-right font-weight-bold">180</p></span>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column w-75">
                <h3>MR Dupont</h3>
                <p>Livraison Gratuite</p>
            </div>
            <p class="w-25 display-6 text-center">50€</p>
        </div>
    </div>
</div>
@endsection
