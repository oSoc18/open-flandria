@extends('layouts.app')

@section('content')
    <section class="gallery">
        <section class="favorites">
            <h1 class="gallery__title u-title type-2">Your Gallery</h1>
            <nav>
                <ul>
                    <li class="gallery__item">
                        <a class="u-title type-2 u-uppercase active" href="#">Favorites</a>
                    </li>
                    <li class="gallery__item">
                        <a class="u-title type-2 u-uppercase" href="#">Your Downloads</a>
                    </li>
                </ul>
            </nav>
            <div class="row gallery__content">
                <!-- First Card -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="c-card secondary">
                        <div class="c-card__img">
                            <img src="<?= asset("img/pic_01.jpg") ?>" class="img-fluid" alt="Responsive image">
                            <div class="c-card__details">
                                <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                <div class="c-card__details__creators">
                                    <figure>
                                        <img src="<?= asset("img/author_1.jpg") ?>" alt="">
                                    </figure>
                                    <div>
                                        <span>Joshua V.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Secondary Card -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="c-card secondary">
                        <div class="c-card__img">
                            <img src="<?= asset("img/pic_01.jpg") ?>" class="img-fluid" alt="Responsive image">
                            <div class="c-card__details">
                                <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                <div class="c-card__details__creators">
                                    <figure>
                                        <img src="<?= asset("img/author_1.jpg") ?>" alt="">
                                    </figure>
                                    <div>
                                        <span>Joshua V.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Card -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="c-card secondary">
                        <div class="c-card__img">
                            <img src="<?= asset("img/pic_01.jpg") ?>" class="img-fluid" alt="Responsive image">
                            <div class="c-card__details">
                                <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                <div class="c-card__details__creators">
                                    <figure>
                                        <img src="<?= asset("img/author_1.jpg") ?>" alt="">
                                    </figure>
                                    <div>
                                        <span>Joshua V.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fourth Card -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="c-card secondary">
                        <div class="c-card__img">
                            <img src="<?= asset("img/pic_01.jpg") ?>" class="img-fluid" alt="Responsive image">
                            <div class="c-card__details">
                                <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                <div class="c-card__details__creators">
                                    <figure>
                                        <img src="<?= asset("img/author_1.jpg") ?>" alt="">
                                    </figure>
                                    <div>
                                        <span>Joshua V.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="own-gallery">
            <h1 class="u-title type-2 u-uppercase" href="#">Galleries</h1>

        </section>
    </section>

@endsection
