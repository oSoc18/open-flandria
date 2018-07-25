<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="<?= asset("img/icons/favicon.png") ?>"/>


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

{{--<script src="{{ asset('js/sign-form.js') }}" defer></script>--}}
{{--<script src="{{ asset('js/upload-form.js') }}" defer></script>--}}
<!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/partials/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/partials/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/utilities/title.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/card.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/error.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/gallery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/show.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/sign.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/upload.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/gallery-single.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/submited.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/contact.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="header">
        <a class="header__logo" href="{{ url('/') }}">
            <img src="<?= asset("img/logo_openflandria.svg") ?>" alt="">
        </a>
        <nav class="navbar navbar-expand-md header__nav">
            <ul class="header__menu-horizontal">
                <li class="header__center">
                    <form class="header__search" action="{{url('search')}}" method="GET">
                        <input type="search" id="query" name="query" placeholder="Treehouse"/>
                        <input type="submit" value=""/>
                    </form>
                    <a href="/upload">
                        <button class="c-button header__upload">Upload</button>
                    </a>
                </li>
                <li class="header__right">
                    <ul>
                        @guest
                            <li class="header__sign">
                                <a class="" href="{{ route('login') }}">{{ __('auth.login')}}</a>/<a
                                        href="{{route('register')}}">{{__('auth.register')}}</a>
                            </li>
                        @else
                            <li class="header__sign">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownProfileButton"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right"
                                         aria-labelledby="dropdownProfileButton">
                                        <a class="dropdown-item" href="{{url('galleries')}}">My Galleries</a>
                                        <a class="dropdown-item"
                                           href="{{route('users.settings')}}">{{__('varia.settings')}}</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('auth.logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endguest
                        <li class="header__bar">
                            <span></span>
                        </li>
                        <li class="header__lang">
                            <ul>
                                @if(strcmp(Config::get('app.locale'), 'en') == 0)
                                    <li>
                                        <a class="header__lang--en header__lang--active" href="/locale/en">en</a>
                                    </li>
                                    <li>
                                        <a class="header__lang--nl" href="/locale/nl">nl</a>
                                    </li>
                                @else
                                    <li>
                                        <a class="header__lang--en" href="/locale/en">en</a>
                                    </li>
                                    <li>
                                        <a class="header__lang--nl header__lang--active" href="/locale/nl">nl</a>
                                    </li>
                                @endif
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
                    <ul class="footer__social">
                        <li class="footer__social--item">
                            <a href="https://www.instagram.com/openflandria/?hl=fr" target="_blank">
                                <?= include('img/SVG/instagram.php') ?>
                            </a>
                        </li>
                        <li class="footer__social--item">
                            <a href="https://www.facebook.com/Open-Flandria-181185236077878/" target="_blank">
                                <?= include('img/SVG/facebook.php') ?>
                            </a>
                        </li>
                    </ul>
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
            ev.stopPropagation();
            var form = $(ev.currentTarget).find('form')[0];
            form.submit();
            return false;
        });
    }
</script>
</body>
</html>
