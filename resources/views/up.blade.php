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
            <form class="upload__form" action="submited">
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
                                <label for="title">Title : *</label>
                            </div>

                            <div class="fieldgroup">
                                <input type="text" name="type" id="type" class="required"/>
                                <label for="type">Type of the project *</label>
                            </div>

                            <div class="fieldgroup">
                                <textarea name="description" id="" cols="30" rows="5"></textarea>
                                <label for="description">Project description : *</label>
                            </div>

                            <div class="fieldgroup">
                                <input type="text" name="architects" id="architects" class="required"/>
                                <label for="architects">Architects : *</label>
                            </div>

                            <div class="fieldgroup">
                                <input type="text" name="photographers" id="photographers" class="required"/>
                                <label for="photographers">Photographers : *</label>
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
                                <li><input type="file" id="photos"></li>
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
                                <input type="text" name="year-build" id="year-build"/>
                                <label for="year-build">Year of build</label>
                            </div>

                            <div class="fieldgroup">
                                <input type="text" name="keywords" id="keywords"/>
                                <label for="keywords">Keywords</label>
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
    <script src="{{ asset('js/interact-button.js') }}" defer></script>
@endsection
