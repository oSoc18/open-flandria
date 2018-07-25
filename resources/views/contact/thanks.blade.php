@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="submited">
            <div class="animation-container">
                <div class="form-step-1 form-step js-form-step" data-step="1">
                    <h1 class="upload__title u-title type-2">Thanks for contacting us!</h1>
                    <p>
                        We will get back to you soon.
                    </p>
                    <a class="c-button btn" href="{{ url('/') }}">Return to the homepage</a>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('js/verify-form.js') }}" defer></script>
@endsection
