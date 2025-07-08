@extends('layouts.default')
@section('content')
    <h1 class="card-title font-weight-bold ">Panier</h1>

        <div class="card text-center" >
            <div class="d-flex justify-content-end flex-fill">
                <button href="#" class="btn btn-block m-2">X</button>
            </div>
            <div class="row align-items-center">
                <img src="../assets/photos/dacaufeu.webp" class="col-12 col-sm-3" alt="...">
                <h3 class="m-0 px-2 text-center  col-12 col-sm-7 ">006/151  Soleil et lune</h3>
                <h3 class="w-20 p-2 text-center align-self-center col-12 col-sm-2">50€</h3>
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

@endsection
