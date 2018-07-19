@extends('layouts.app')

@section('content')
        <!--
    <section class="signin">
        <img src="" alt="">
        <h1 class="u-title type-1 u-title__signin">Sign in</h1>
        <p>
            If you want to upload something on the Open Flandria, you need to connect or to create an account
        </p>
        <form class="signin__form" action="">
            <fieldset>
                <input type="email" placeholder="Email" />
            </fieldset>
            <fieldset>
                <input type="password" placeholder="Password">
            </fieldset>

            <input type="submit" value="Sign in">
        </form>
    </section>
    -->

<section class="sign-in">
    <div class="container">
        <img src="" alt=""/>
    <h1 class="u-title type-1 sign-in__title">Sign in</h1>
        <span>
            If you want to upload something on the Open Flandria, you need to connect or to create an account
        </span>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-lg-12 col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                       placeholder="Email adress" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-12 col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button">
                                    {{ __('Sign in') }}
                                </button>
                            </div>
                        </div>
                        <a href="#">Not a member ? Sign up</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
-->
@endsection
