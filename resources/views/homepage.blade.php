@extends('layouts.default')
@section('content')
    <h1>Attrapez les tous !</h1>
    <div class="input-group rounded border border-3 border-dark">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <button class="input-group-text border-0" id="search-addon">
            <img src="assets/search.svg" alt="">
        </button>
    </div>
    <div class="d-flex gap-3 flex-fill mt-2 p-2 border-3  border rounded-pill scroll_h justify-content-center">
    <button  class="btn btn-block rounded-pill"  style="min-width: 120px;" >etat</button>
    <button  class="btn btn-block rounded-pill"  style="min-width: 120px;">Prix </button>
    <button  class="btn btn-block rounded-pill"  style="min-width: 120px;">Certifiaction</button>
    <button  class="btn btn-block rounded-pill"  style="min-width: 120px;">Illustrateur</button>
    </div>
    <section id="Card" class="mt-4 d-flex flex-wrap gap-3 justify-content-center">
        <div class="card border-1 border-dark" style="width: 18rem;">
            <div class="d-block text-center h-75 d-inline-block">
                <img src="../assets/photos/dracaufeu.webp" class="card-img-top mw-75" alt="...">
            </div>
            <div class="card-body">
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nom:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">Dracaufeu</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Extension:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">Promo</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nb d'exemplaire:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">2</p></span>
                    <boutton onclick="window.location='{{ url("/product/1") }}'" class="btn btn-block w-100">Détail</boutton>
            </div>
        </div>

        <div class="card border-1 border-dark" style="width: 18rem;">
            <div class="d-block text-center h-75 d-inline-block">
                <img src="assets/photos/picachu.webp" class="card-img-top mw-75" alt="...">
            </div>
            <div class="card-body">
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nom:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">Picachu</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Extension:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">Epée et bouclier</p></span>
                <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nb d'exemplaire:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">3</p></span>
                <a href="#" class="btn btn-block w-100">Détail</a>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/homepage.js') }}" ></script>
@endsection
