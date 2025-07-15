@extends('layouts.backoffice-default')
@section('content')
    <div class="d-flex flex-wrap gap-5 align-items-stretch justify-content-center">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title font-weight-bold text-center">Création</h1>
                <h2 class="card-title font-weight-bold">Détail de la carte</h2>
                <form class="" action="{{ route('backoffice.product.saveNewProduct') }}" method="post">@csrf
                    <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Nom:</label><input type="text" name="name" id="name" placeholder="nom" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                    <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Numéro:</label><input type="text" name="number" id="number" placeholder="numéro" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                    <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Collection:</label><input type="text" name="extension" id="extension" placeholder="extension" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                    <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Type</label><input type="text" name="type" id="type" placeholder="type" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                    <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">PV</label><input type="text" name="PV" id="PV" placeholder="PV" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                    <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Nom du vendeur</label><input type="text" name="photo" id="photo" placeholder="photo" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                    <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">Nom du vendeur</label><input type="text" name="sellerName" id="sellerName" placeholder="nom du vendeur" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                    <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">prix</label><input type="text" name="price" id="price" placeholder="prix en €" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                    <span class="d-flex m-1"><label class="card-title w-50 font-weight-bold">livraison</label><input type="text" name="delivery_price" id="delivery_price" placeholder="prix de la livraison" class="m-0 px-2 w-50 text-right font-weight-bold"></span>
                    <span class="d-flex"><button class="btn btn-block mx-4 my-2 w-100">créer</button></span>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <p>{{$errors->first() }} </p>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
