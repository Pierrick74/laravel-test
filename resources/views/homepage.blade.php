@extends('layouts.default')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="search-container">
            <h1 class="p-4">Attrapez les tous !</h1>
            <form action="{{ route('products.search') }}" method="GET" class="w-100">
                <div class="input-group border border-3 border-dark rounded">
                    <input
                        type="search"
                        name="search"
                        id="search"
                        class="form-control"
                        placeholder="Search"
                        aria-label="Search"
                        aria-describedby="search-addon"
                        style="border: none;"
                    />
                    <button class="input-group-text border-0 bg-transparent" type="submit" id="search-addon">
                        <img style="width: 30px; height: 30px" src="{{ asset('assets/search.svg') }}" alt="">
                    </button>
                </div>
            </form>
            <div class="container mt-2 p-2 justify-content-center filter">
                <div class="row column-gap-3 gap-1 ">
                    <button onclick="window.location='{{ url("/sort/name") }}'" class="col btn btn-block rounded-pill">nom</button>
                    <button onclick="window.location='{{ url("/sort/extension") }}'" class="col btn btn-block rounded-pill">extention </button>
                    <div class="w-100 d-md-none"></div>
                    <button onclick="window.location='{{ url("/sort/PV") }}'" class="col btn btn-block rounded-pill">PV</button>
                    <button onclick="window.location='{{ url("/sort/Type") }}'" class="col btn btn-block rounded-pill">Type</button>
                </div>
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
    </div>
    </div>
    <script src="{{ asset('js/homepage.js') }}" ></script>
@endsection
