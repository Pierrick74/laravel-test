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
    <button onclick="window.location='{{ url("/sort/name") }}'" class="btn btn-block rounded-pill">nom</button>
    <button onclick="window.location='{{ url("/sort/extension") }}'" class="btn btn-block rounded-pill">extention </button>
    <button onclick="window.location='{{ url("/sort/PV") }}'" class="btn btn-block rounded-pill">PV</button>
    <button onclick="window.location='{{ url("/sort/Type") }}'" class="btn btn-block rounded-pill">Type</button>
    </div>
    <section id="Card" class="mt-4 d-flex flex-wrap gap-3 justify-content-center">
        @foreach($cards as $card)
            <div class="card border-1 border-dark" style="width: 18rem;">
                <div class="d-block text-center h-75 d-inline-block">
                    <img src="../assets/photos/{{$card -> photo}}" class="card-img-top w-50 mt-2" alt="...">
                </div>
                <div class="card-body">
                    <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nom:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$card -> name}}</p></span>
                    <span class="d-flex"><p class="card-title w-50 font-weight-bold">Extension:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$card -> extension}}</p></span>
                    <span class="d-flex"><p class="card-title w-50 font-weight-bold">Nb d'exemplaire:</p><p class="m-0 px-2 w-50 text-right font-weight-bold">{{$card -> nbProducts()}}</p></span>
                    <button onclick="window.location='{{ url("/product/{$card ->id}") }}'" class="btn btn-block w-100">Détail</button>
                </div>
            </div>
        @endforeach

    </section>

    <script src="{{ asset('js/homepage.js') }}" ></script>
@endsection
