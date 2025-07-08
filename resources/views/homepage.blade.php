@extends('layouts.default')
@section('content')
    <h1>Attrapez les tous !</h1>
    <div class="input-group rounded">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <button class="input-group-text border-0" id="search-addon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </button>
    </div>

    <section id="Card" class="mt-4 d-flex flex-wrap gap-3">
        <div class="card" style="width: 18rem;">
            <div class="d-block text-center h-75 d-inline-block">
                <img src="assets/photos/dacaufeu.webp" class="card-img-top mw-75" alt="...">
            </div>
            <div class="card-body">
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nom:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">Dracaufeu</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Extension:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">Promo</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nb d'exemplaire:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">2</p></span>
                <boutton onclick="window.location='{{ url("/product/Dracaufeu") }}'" class="btn btn-block ">Détail</boutton>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="d-block text-center h-75 d-inline-block">
                <img src="assets/photos/picachu.webp" class="card-img-top mw-75" alt="...">
            </div>
            <div class="card-body">
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nom:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">Picachu</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Extension:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">Epée et bouclier</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nb d'exemplaire:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">3</p></span>
                <a href="#" class="btn btn-block ">Détail</a>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/homepage.js') }}" ></script>
@endsection
