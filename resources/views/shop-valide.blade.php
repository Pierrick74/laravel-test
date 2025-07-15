@extends('layouts.default')
@section('content')
    <h1 class="card-title font-weight-bold ">Panier</h1>
        <div class="card text-center align-items-center" >
            <p class="m-5">Panier Validé</p>
            <button onclick="window.location='{{ route('home')}}'" class="btn btn-block mx-4 my-2" >Retour</button>
        </div>
@endsection
