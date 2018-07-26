@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="upload">
            <div class="form-progress">
                <progress class="form-progress-bar" min="0" max="100" value="0" step="33" aria-labelledby="form-progress-completion"></progress>

                <div class="form-progress-indicator one active"></div>
                <div class="form-progress-indicator two"></div>
                <div class="form-progress-indicator three"></div>
                <div class="form-progress-indicator four"></div>

                <p id="form-progress-completion" class="js-form-progress-completion sr-only" aria-live="polite">0% complete</p>
            </div>
            <form class="upload__form" action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="animation-container">
                    <!-- Step one -->
                    <div class="form-step-1 form-step js-form-step" data-step="1">
                        <h1 class="upload__title u-title type-1"> Main informations</h1>
                        <ul class="upload__desc">
                            <li>Add information about your project</li>
                            <li>* is required</li>
                        </ul>
                        <div style="opacity:0" class="alert alert-danger" role="alert">
                            Please complete required fields.
                        </div>
                        <div action="" name="form-step-1">
                            <div class="fieldgroup">
                                <input type="text" name="title" id="title" class="required"/>
                                <label for="title">{{__('projects.title')}}:*</label>
                            </div>

                            <div class="fieldgroup">
                                <textarea name="description" id="description" cols="30" rows="5"></textarea>
                                <label for="description">{{__('projects.description')}}:*</label>
                            </div>

                            <div class="fieldgroup">
                                <input type="text" name="creator" id="creator" class="required"/>
                                <label for="creator">{{__('projects.creator')}}:*</label>
                            </div>

                            <div class="buttons">
                                <button type="button" class="c-button btn btn-alt js-reset">Reset</button>

                                <button type="submit" class="c-button btn">Continue</button>
                            </div>
                        </div>

                    </div>

                    <!-- Step two -->
                    <div class="form-step-2 form-step js-form-step waiting hidden" data-step="2">
                        <h1 class="u-title type-1">Photos</h1>
                        <ul class="upload__desc">
                            <li>Add information about the images</li>
                            <li>The preferable dimension is 1280x720</li>
                            <li>No watermarks</li>
                        </ul>
                        <div class="form-step-2">
                            <ul class="fieldgroup">
                                <input type="hidden" name="amt-of-images" id="amt-of-images" value="0">
                            </ul>

                            <button class="upload__button button-add">Add</button>


                            <div class="buttons">
                                <button type="button" class="c-button btn btn-alt js-reset">Reset</button>

                                <button type="submit" class="c-button btn">Continue</button>
                            </div>
                        </div>

                    </div>

                    <!-- Step three -->
                    <div class="form-step-3 form-step js-form-step waiting hidden" data-step="3">
                        <h1>Further informations</h1>
                        <ul class="upload__desc">
                            <li>Add information about your project</li>
                            <li>* is required</li>
                        </ul>
                        <div style="opacity:0" class="alert alert-danger" role="alert">
                            Please complete required fields.
                        </div>
                        <form action="" name="form-step-3">
                            <div class="fieldgroup">
                                <input type="text" name="location" id="location"/>
                                <label for="location">Location</label>
                            </div>

                            <div class="fieldgroup">
                                <input type="number" min="1900" max="2999" name="year" id="year"/>
                                <label for="year">Year</label>
                            </div>

                            <div class="fieldgroup">
                                <input type="text" name="tags" id="tags"/>
                                <label for="tags">Keywords</label>
                            </div>

                            <div class="buttons">
                                <button type="button" class="c-button btn btn-alt js-reset">Reset</button>

                                <button type="submit" class="c-button btn">Continue</button>
                            </div>
                        </form>

                    </div>

                    <!-- Step four -->
                    <div class="form-step-4 form-step js-form-step waiting hidden" data-step="4">
                        <h1>Confirm</h1>
                        <div style="opacity:0" class="alert alert-danger" role="alert">
                            Please complete required fields.
                        </div>
                        <div name="form-step-4">
                            <p>Do you confirm all your elements are ok to send ?</p>

                            <div class="buttons">
                                <button type="button" class="c-button btn btn-alt js-reset">Reset</button>
                                <input type="submit" value="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <script src="{{ asset('js/upload-form.js') }}" defer></script>
@endsection
