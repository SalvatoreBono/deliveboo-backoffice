<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Deliveboo</title>
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        window.addEventListener("scroll", handleScroll);

        function handleScroll() {
            const navbar = document.getElementById("myNavbar");
            if (navbar) {
                const scrollY = window.scrollY;
                if (scrollY > 0) {
                    navbar.style.backgroundColor = "rgba(65, 100, 46, 0.6)";
                    navbar.querySelectorAll("a").forEach((link) => {
                        link.style.color = "#dbd5af";
                    });
                } else {
                    navbar.style.backgroundColor = "rgba(255, 255, 255, 0.3)";
                    navbar.querySelectorAll("a").forEach((link) => {
                        link.style.color = "black";
                    });
                }
            }
        }
    });
</script>

<body class="container-dash">
    <div id="app">

        <nav class="navbar navbar-expand-lg" id="myNavbar">
            <div class="container">
                <div>
                    <a href="http://localhost:5174/"><img style="width: 210px;" src="/img/logo.png" alt=""></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="http://localhost:5174/" class="px-3 fs-3">Home</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="px-3 fs-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="px-3 fs-3" href="{{ route('register') }}">{{ __('Sign in') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="px-3 fs-3 dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>



                                <div style="left: -110px;" class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="navbarDropdown">
                                    @if (Auth::check() && !Auth::user()->restaurant)
                                        <a class="dropdown-item"
                                            href="{{ route('admin.restaurants.create') }}">{{ __('Crea il tuo ristorante') }}</a>
                                    @endif
                                    @if (Auth::user())
                                        @if (Auth::check() && Auth::user()->restaurant)
                                            <a class="dropdown-item"
                                                href="{{ route('admin.restaurants.show', Auth::user()->id) }}">{{ __('Visualizza il tuo ristorante') }}</a>
                                        @endif
                                    @endif
                                    @if (Auth::check() && Auth::user()->restaurant)
                                        <a class="dropdown-item"
                                            href="{{ route('admin.products.create') }}">{{ __('Aggiungi i tuoi piatti') }}</a>
                                    @endif

                                    @if (Auth::check() && Auth::user()->restaurant)
                                        <a class="dropdown-item"
                                            href="{{ route('admin.products.index') }}">{{ __('Guarda tutti i tuoi piatti') }}</a>
                                    @endif

                                    @if (Auth::check() && Auth::user()->restaurant)
                                        <a class="dropdown-item"
                                            href="{{ route('admin.orders.index') }}">{{ __('Visualizza tutti i tuoi ordini') }}</a>
                                    @endif
                                    <a class="dropdown-item"
                                        href="{{ route('dashboard') }}">{{ __('Documentazione') }}</a>
                                    <a class="dropdown-item" href="{{ url('admin/profile') }}">{{ __('Profilo') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main style="padding-top: 120px" class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
