@extends('layouts.app')

@section('content')

    <section class="about">
        <h1 class="title__about u-title">About</h1>
        <p class="about__desc">
            Created by <a href="https://www.vlaanderen.be/nl/vlaamse-regering/visie-2050/slim-wonen-en-leven" target="_blank">Slim Wonen en Leven</a>, Open Flandria is a digital gallery for stakeholders who are interested in sustainable and alternative ways of building and living. Our gallery captures the real and existing solutions for sustainable building and living in Flanders.
            All the images are free to download and use.
        </p>
        <section class="about__features">
            <ul class="row">
                <li class="col-lg-4 about__item">
                    <h1 class="about__title u-title type-3 u-uppercase bold">Mission</h1>
                    <ul>
                        <li class="about__subitem">
                            To provide high-quality, realistic and attractive images that help to create a new smart Flemish living culture
                        </li>
                        <li class="about__subitem">
                            To bring awareness about sustainable living in Flanders
                        </li>
                        <li class="about__subitem">
                            To educate younger generations about sustainable living
                        </li>
                        <li class="about__subitem">
                            To inspire creators and influencers to build and design sustainably
                        </li>
                    </ul>
                </li>
                <li class="col-lg-4 about__item">
                    <h1 class="about__title u-title type-3 u-uppercase bold">Vision</h1>
                    <ul>
                        <li class="about__subitem">
                            To create the biggest digital gallery for sustainable living in Flanders
                        </li>
                        <li class="about__subitem">
                            To become the reference for everyone who communicates around sustainable building and living in Flanders
                        </li>
                    </ul>
                </li>
                <li class="col-lg-4 about__item">
                    <h1 class="about__title u-title type-3 u-uppercase bold">What we do</h1>
                    <ul>
                        <li class="about__subitem">
                            We coordinate the projects that capture the sustainable living in Flanders
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </section>

@endsection
