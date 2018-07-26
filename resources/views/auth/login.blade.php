@extends('layouts.app')
@section('content')
    <section class="sign">
        <div class="sign__field">
            <form class="sign__form sign__sign-in" method="POST" action="{{route('login')}}">
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
                <h2 class="u-title u-title type-2">{{__('forms.hi')}}</h2>
                <label>
                    <span>{{__('forms.email')}}</span>
                    <input name="email" id="email" class="sign__input" type="email" required/>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </label>
                <label>
                    <span>{{__('forms.password')}}</span>
                    <input name="password" id="password" class="sign__input" type="password"/>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </label>
                <input type="submit" class="c-button sign__connect" value="Sign In" />
                <a href="{{route('password.request')}}" class="forgot-pass sign__forgot-pass">Forgot password?</a>
            </form>
            <div class="sign__subfield">
                <div class="sign__img">
                    <div class="sign__img__text m--up">
                        <h2>{{__('forms.new')}}</h2>
                        <p>{{__('forms.registerinsentive')}}</p>
                    </div>
                    <div class="sign__img__btn">
                        <a class="m--up" href="{{ route('register') }}">{{__('auth.register')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
