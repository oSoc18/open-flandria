@extends('layouts.app')

@section('content')
    <section class="sign-in">
        <div class="container">
            <img src="" alt=""/>
            <h1 class="u-title type-1 sign-in__title">{{__('auth.login')}}</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                             @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">
                                {{session('warning')}}
                            </div>
                        @endif
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12">
                                    <input id="email" type="email"
                                           class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}"
                                           placeholder="{{__('forms.email')}}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-lg-12 col-md-12">
                                    <input id="password" type="password" placeholder="{{__('forms.password')}}"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('passwords.rememberme') }}
                                        </label>
                                    </div>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('passwords.forgotten') }}
                                    </a>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-default">
                                        {{ __('auth.login') }}
                                    </button>
                                </div>
                            </div>
                            <a href="#">{{__('auth.nomember')}}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <script src="{{ asset('js/sign-form.js') }}" defer></script>--}}
@endsection
