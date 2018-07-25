@extends('layouts.app')
@section('content')
    <section class="contact">
        <section class="contact__form">
            <form method="post" class="contact__form" action="{{route('contact')}}">
                @csrf
                <div class="animation-container">
                    <h1 class="contact__title u-title type-1"> Contact us</h1>
                    <p class="contact__desc">
                        If you have any questions, suggestions or need help, please contact us via the form below.
                    </p>
                    <div style="opacity:0" class="alert alert-danger" role="alert">
                        Please complete required fields.
                    </div>
                    <div>
                        <div class="fieldgroup">
                            <input type="text" name="name" id="name" class="required" required/>
                            <label for="name">Name*:</label>
                        </div>

                        <div class="fieldgroup">
                            <input type="email" name="email" id="email" class="required" required/>
                            <label for="email">Email*:</label>
                        </div>
                        <div class="fieldgroup">
                            <input type="text" name="subject" id="subject" class="required" required/>
                            <label for="subject">Subject*:</label>
                        </div>

                        <div class="fieldgroup">
                            <textarea name="message" id="message" cols="30" rows="5" class="required" required></textarea>
                            <label for="message">Message*:</label>
                        </div>

                        <div class="buttons">
                            <button type="submit" value="send" class="c-button btn">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <section class="contact__infos">
            <div class="animation-container">
                <h1 class="contact__title u-title type-1"> Contact information</h1>

                <div class="contact__item">
                    <h2 class="u-title type-3">Adress</h2>
                    <ul>
                        <li>Herman Teirlinckgebouw B</li>
                        <li>Avenue du Port 88</li>
                        <li>1000 Brussels</li>
                    </ul>
                </div>
                <div class="contact__item">
                    <h2 class="u-title type-3">Email</h2>
                    <a href="mailto:hilde.luyts@vlaanderen.be">hilde.luyts@vlaanderen.be</a>
                </div>
                <div class="contact__item">
                    <h2 class="u-title type-3">Tel.</h2>
                    <a href="tel:(+32)2 553 83 25">(+32)(0)2 553 83 25</a>
                </div>
            </div>
        </section>
    </section>
    <script src="{{ asset('js/contact-form.js') }}" defer></script>
@endsection
