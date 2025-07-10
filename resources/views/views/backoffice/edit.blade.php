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
                <form class="" action="/backoffice/product/{{$product->id}}/saveEdit" method="post">@csrf
                <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Nom:</label><input type="text" name="name" id="name" placeholder="{{$product -> card -> name}}" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Numéro:</label><input type="text" name="number" id="number" placeholder="{{$product -> card -> number}}" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Collection:</label><input type="text" name="extension" id="extension" placeholder="{{$product -> card -> extension}}" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Type</label><input type="text" name="type" id="type" placeholder="{{$product -> card -> type}}" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">PV</label><input type="text" name="PV" id="PV" placeholder="{{$product -> card  -> PV}}" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Nom du vendeur</label><input type="text" name="sellerName" id="sellerName" placeholder="{{$product->seller -> name}}" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">prix</label><input type="text" name="price" id="price" placeholder="{{$product -> price}} €" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">livraison</label><input type="text" name="delivery_price" id="delivery_price" placeholder="{{$product-> delivery_price}}" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                    <span class="d-flex"><button class="btn btn-block mx-4 my-2 w-100">Modifier</button></span>
                </form>
            </div>
        </div>
    </div>
@endsection
