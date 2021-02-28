<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- icons-->
    <script src="https://kit.fontawesome.com/716c39e7c3.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
<div id="app">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-main-brand">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-lg-5" id="navbarNav">
                    <ul class="navbar-nav">
                       
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/"><i class="fas fa-home "></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-light" href="{{route('guardarcontacto')}}">Contacto<a></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link " href="/listproduct">Productos</a>
                        </li>
                        
                        @else
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/home"><i class="fas fa-home "></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/product">Mis Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category">Mis Categorías</a>
                        </li>
                        @endguest
                        
                        
                    </ul>
                </div>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="nav-link fas fa-shopping-cart"></i></a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
    <footer id="footer" class="text-center text-light py-3 bg-main-brand">
        <address >
            Copyright © 2016 - 2021 Tecnoinnsoft SAS, Todos los derechos reservados.
        </address>
        <div>
          <a class="link-light" href="#"><i class="fa fa-whatsapp"></i> +57 3212195557</a> - 
          <a class="link-light" href="mailto:"desarrollo.laravel.dacs12@gmail.com"><i class="fa fa-envelope-o"></i> dacs1294@gmail.com</a> 
        </div>
        <a class="link-light" href="#"><i class="fa fa-facebook-square"></i> Facebook</a> | 
        <a class="link-light" href="#"><i class="fa fa-twitter-square"></i> Twitter</a> |
        <a class="link-light" href="#"><i class="fa fa-youtube-square"></i> Youtube</a> |
        <a class="link-light" href="#"><i class="fa fa-linkedin-square"></i> LinkedIn</a>
    </footer>
</body>
</html>
