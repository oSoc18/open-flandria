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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{--<script src="{{ asset('js/sign-form.js') }}" defer></script>--}}
    {{--<script src="{{ asset('js/upload-form.js') }}" defer></script>--}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/partials/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/partials/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/utilities/title.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/card.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/gallery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/show.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/sign.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="header">
    <div class="header__logo">
            <a class="" href="{{ url('/') }}">
                <img src="<?= asset("img/logo_openflandria.svg") ?>" alt="">
            </a>
        </div>
        <nav class="navbar navbar-expand-md header__nav">
            <ul class="header__menu-horizontal">
                <li class="header__center">
                    <form class="header__search" action="{{route('search')}}" method="GET">
                        <input type="search" placeholder="Search the bulding, location, materials…"/>
                        <input type="submit" value="" />
                    </form>
                </li>
                <li class="header__right">
                    <!-- Right Side Of Navbar -->
                    <ul>
                        <!-- Authentication Links -->
                        @guest
                            <li class="header__sign">
                                <a class="" href="{{ route('login') }}">{{ __('auth.login').'/'.__('auth.register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('users.settings')}}">{{__('varia.settings')}}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('auth.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="header__bar">
                            <span></span>
                        </li>
                        <li class="header__lang">
                            <ul>
                                <li>
                                    <a class="header__lang--en" href="#">en</a>
                                </li>
                                <li>
                                    <a class="header__lang--nl" href="#">nl</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="header__menu-vertical">
                <li>
                    <a class="nav-link" href="{{ url('/about') }}">
                        about
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('/contact') }}">
                        contact
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <main class="py-4 container">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container">
            <ul class="row">
                <li class="col-lg-3 col-sm-6">
                    <h1 class="footer__title">About open flandria</h1>
                    <a class="footer__item" href="#">What is Open Flandria? </a>
                    <a class="footer__item" href="">Contact</a>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <h1 class="footer__title">Other</h1>
                    <a class="footer__item" href="#">Cookies, Terms & Privacy</a>
                    <a class="footer__item" href="">FAQ</a>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <h1 class="footer__title">Contact</h1>
                    <a class="footer__item" href="#">info@openflandria.be</a>
                    <a class="footer__item" href="#">+32 458 114 623</a>
                </li>
                <li class="col-lg-3 col-sm-6">
                    <h1 class="footer__title partners">In association with</h1>
                    <img src="<?= asset("img/Logo_Vlaanderen.svg") ?>" alt="">
                </li>
            </ul>
        </div>
    </footer>
</div>

<script>
    document.addEventListener('DOMContentLoaded', init, false);

    function init() {
        $(".like").on("click", function (ev) {
            ev.preventDefault();
            var form = $(ev.currentTarget).find('form')[0];
            form.submit();
            return false;
        });
    }
</script>
</body>
</html>