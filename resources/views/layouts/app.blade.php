<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/utilities/title.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/card.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/button.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <ul class="menu horizontal">
                <li>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name') }}
                    </a>
                </li>
                <li>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </li>
                <li>
                    <form action="">
                        <input type="search" placeholder="Search the bulding, location, materials…" />
                        <input type="submit" />
                    </form>
                </li>
                <li>
                    <ul>
                        <li>
                            <a href="#">EN</a>
                        </li>
                        <li>
                            <a href="#">NL</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Upload</a>
                </li>
                <li>
                    <a class="navbar-brand" href="{{ url('/signin') }}">
                        Sign in / Sign up
                    </a>
                </li>
            </ul>
            <ul class="menu vertical">
                <li>
                    <a class="navbar-brand" href="{{ url('/about') }}">
                        about
                    </a>
                </li>
                <li>
                    <a class="navbar-brand" href="{{ url('/contact') }}">
                        contact
                    </a>
                </li>
            </ul>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('users.settings')}}">Settings</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4 container">
        @yield('content')
    </main>
    <footer class="footer">
        <div>
            <ul class="row">
                <li class="col-lg-3 col-sm-6">
                    <h1>About open flandria</h1>
                    <a href="#">What is Open Flandria? </a>
                    <a href="">Contact</a>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <h1>Other</h1>
                    <a href="#">Cookies, Terms & Privacy</a>
                    <a href="">FAQ</a>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <h1>Contact</h1>
                    <a href="#">info@openflandria.be</a>
                    <a href="#">+32 458 114 623</a>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <span>
                        In association with
                        <img src="" alt="">
                    </span>
                </li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>
