@extends('layouts.app')

@section('content')

    <section class="sign">
        <h1 class="title__sign u-title type-1">Sign in</h1>
        <p class="sign__desc">If you have any questions, suggestions or need help, please contact us via the form below.</p>
        <div class="sign__field">
            <div class="sign__form sign__sign-in">
                <h2 class="u-title u-title type-2">Hello you!</h2>
                <label>
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
                        <a class="m--up" href="{{ url('/signup') }}">Sign Up</a>
                    </div>
                </div>
                <div class="sign__form submit__sign-up">
                    <h2>Welcome to Open Flandria!</h2>
                    <label>
                        <span>Name</span>
                        <input class="sign__input" type="text"/>
                    </label>
                    <label>
                        <span>Email</span>
                        <input class="sign__input" type="email"/>
                    </label>
                    <label>
                        <span>Password</span>
                        <input class="sign__input" type="password"/>
                    </label>
                    <a class="c-button sign__connect">Sign Up</a>
                </div>
            </div>
        </div>
    </section>

@endsection
