<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 border-bottom">
    @include('includes.backoffice-header')
</header>
<main>
    @yield('content')
</main>
<footer>
    @include('includes.footer')
</footer>
</body>
</html>
