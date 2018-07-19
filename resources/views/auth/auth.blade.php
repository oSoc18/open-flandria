@extends('layouts.app')

@section('content')

    <section class="sign">
        <h1 class="title__sign u-title type-1">Sign in / Sign up</h1>
        <p class="sign__desc">If you have any questions, suggestions or need help, please contact us via the form
            below.</p>
        <div class="sign__field">
            <div class="sign__form sign__sign-in">
                <h2 class="u-title u-title type-2">Hello you!</h2>
                <label>SIGN UP
                    <span>Email</span>
                    <input class="sign__input" type="email"/>
                </label>
                <label>
                    <span>Password</span>
                    <input class="sign__input" type="password"/>
                </label>
                <a href="#" class="forgot-pass sign__forgot-pass">Forgot password?</a>
                <button type="button" class="c-button sign__connect">Sign In</button>

            </div>
            <div class="sign__subfield">
                <div class="sign__img">
                    <div class="sign__img__text m--up">
                        <h2>New here?</h2>
                        <p>Sign up and create your inspiration about subtanable living!</p>
                    </div>
                    <div class="sign__img__text m--in">
                        <h2>One of us?</h2>
                        <p>Use your email address and account password in order to sign in</p>
                    </div>
                    <div class="sign__img__btn">
                        <span class="m--up">Sign Up</span>
                        <span class="m--in">Sign In</span>
                    </div>
                </div>
                <div class="sign__form submit__sign-up">
                    <h2>Welcome to Open Flandria!</h2>
                    <form action="{{route('register')}}" method="POST" aria-label="{{__('Register')}}">
                        @csrf
                        <div>
                            <label for="name">{{__('forms.name')}}</label>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            <input class="sign__input" type="text" id="name" name="name"/>
                        </div>

                        <div>
                            <label for="email">{{__('forms.email')}}</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <input class="sign__input" type="email" id="email" name="email"/>
                        </div>

                        <div>
                            <label for="password">{{__('forms.password')}}</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <input class="sign__input" type="password" id="password" name="password"/>
                        </div>

                        <div>
                            <label for="password_confirmation">{{__('forms.c_password')}}</label>
                            <input class="sign__input" type="password" id="password_confirmation" name="password_confirmation"/>
                        </div>
                        <input type="submit" class="c-button sign__connect">{{__('auth.login')}}</input>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
