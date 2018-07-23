@extends('layouts.app')

@section('content')
    <section class="contact">
        <form class="contact__form" action="submited">
            <div class="animation-container">
                <!-- Step one -->
                <div class="form-step-1 form-step js-form-step" data-step="1">
                    <h1 class="contact__title u-title type-1"> Contact us</h1>
                    <p class="contact__desc">
                        If you have any questions, suggestions or need help, please contact us via the form below.
                    </p>
                    <div style="opacity:0" class="alert alert-danger" role="alert">
                        Please complete required fields.
                    </div>
                    <div action="" name="form-step-1">
                        <div class="fieldgroup">
                            <input type="text" name="title" id="title" class="required"/>
                            <label for="title">Name : *</label>
                        </div>

                        <div class="fieldgroup">
                            <input type="text" name="type" id="type" class="required"/>
                            <label for="type">Email *</label>
                        </div>
                        <div class="fieldgroup">
                            <select class="select" name="" id="">
                                <option value="Account Support">Account Support</option>
                                <option value="Projects and Images Support">Projects and Images Support</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Other">Other</option>
                            </select>
                            <label for="type">Reason to contact: *</label>
                        </div>


                        <div class="fieldgroup">
                            <textarea name="description" id="" cols="30" rows="5"></textarea>
                            <label for="description">Your message : *</label>
                        </div>

                        <div class="buttons">
                            <button type="submit" class="c-button btn">Send</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </section>

@endsection
