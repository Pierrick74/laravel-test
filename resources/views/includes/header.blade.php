
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32" aria-hidden="true">
            <use xlink:href="#bootstrap">
            </use>
        </svg>
        <span class="fs-4">PokeMarket</span>
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item "><a href="{{ url('/') }}" class="nav-link ">recherche</a></li>
        <li class="nav-item "><a href="#" class="nav-link ">vente</a></li>
        <li class="nav-item "><a href="{{ url('/shop') }}" class="nav-link ">panier</a></li>
        @auth
            <!-- Utilisateur connecté -->
            <li class="nav-item"><a href="{{ route('profile.edit') }}" class="nav-link">{{ Auth::user()->name }}</a></li>

            @if(Auth::user()->user_type === 'admin')
                <li class="nav-item"><a href="{{ route('backoffice.product.index') }}" class="nav-link">admin</a></li>
            @endif

            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link p-0 border-0 mx-2 my-2">déconnexion</button>
                </form>
            </li>
        @else
            <!-- Utilisateur non connecté -->
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">connexion</a></li>
            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">inscription</a></li>
        @endauth
    </ul>

