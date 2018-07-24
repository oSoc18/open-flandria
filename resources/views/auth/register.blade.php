@extends('layouts.app')

@section('content')
    <section class="sign">
        <div class="sign__field s--signup">
            <div class="sign__subfield">
                <div class="sign__img">
                    <div class="sign__img__text m--in">
                        <h2>{{__('forms.alreadyaccount')}}</h2>
                        <p>{{__('forms.alreadyinstruction')}}</p>
                    </div>
                    <div class="sign__img__btn">
                        <a class="m--up" href="{{ route('login') }}">{{__('auth.login')}}</a>
                    </div>
                </div>
                <form class="sign__form submit__sign-up" method="POST" action="{{route('register')}}">
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
                    <h2>{{__('forms.welcome')}}</h2>
                    <label>
                        <span>{{__('forms.name')}}</span>
                        <input id="name" name="name" class="sign__input" type="text"/>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </label>
                    <label>
                        <span>{{__('forms.email')}}</span>
                        <input id="email" name="email" class="sign__input" type="email"/>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </label>
                    <label>
                        <span>{{__('forms.password')}}</span>
                        <input id="password" name="password" class="sign__input" type="password"/>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </label>
                    <label>
                        <span>{{__('forms.c_password')}}</span>
                        <input id="password_confirmation" name="password_confirmation" class="sign__input" type="password"/>
                    </label>
                    <input type="submit" value="{{__('auth.register')}}" class="c-button sign__connect"/>
                </form>
            </div>
        </div>
    </section>
@endsection
