@extends('layouts.app')

@section('content')
    <section class="homepage">
        <h1 class="u-title type-0 u-title__baseline">
            <span>A visual inspiration</span>
            <span>for substainable living</span>
        </h1>
        <div class="homepage__content row">
            <div class="col-lg-6">
                <h1 class="u-title type-3 u-title__homepage">Most liked projects of the week</h1>
                <div class="c-card">
                    <div class="c-card__popup">
                        <h1 class="u-title type-4">Add to Gallery</h1>
                        <ul>
                            <li>
                                <button>Inpiration</button>
                            </li>
                            <li>
                                <button>Inpiration</button>
                            </li>
                            <li>
                                <button>Inpiration</button>
                            </li>
                            <li>
                                <button>Inpiration</button>
                            </li>
                            <li>
                                <button>Inpiration</button>
                            </li>
                            <li>
                                <button>Inpiration</button>
                            </li>
                            <li>
                                <button>Inpiration</button>
                            </li>
                            <li>
                                <button>Inpiration</button>
                            </li>
                        </ul>
                    </div>
                    <div class="c-card__img">
                        <img src="<?= asset("img/pic_01.jpg") ?>" class="img-fluid" alt="Responsive image">
                        <ul>
                            <li>
                                <button class="c-card__button tiny__button like">
                                    <span>Like</span>
                                    <?php include("img/SVG/like.php") ?>
                                </button>
                            </li>
                            <li>
                                <button class="c-card__button tiny__button bookmark">
                                    <span>Bookmarked</span>
                                    <?php include("img/SVG/bookmark.php") ?>
                                </button>
                            </li>
                        </ul>
                        <div class="c-card__details">
                            <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                            <div class="c-card__details__creators">
                                <figure>
                                    <img src="<?= asset("img/author_1.jpg") ?>" alt="">
                                </figure>
                                <div>
                                    <span>Published by</span>
                                    <span>Joshua V.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <h1 class="u-title type-3 u-title__homepage">Other projects</h1>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="c-card tiny">
                            <div id="gallery-popup-1" class="c-card__popup">
                                <h1 class="u-title type-4">Add to Gallery</h1>
                                <ul>
                                    <li>
                                        <input class="pop__up--value" type="text">
                                        <button class="pop__up--add">Add</button>
                                    </li>
                                    <li>
                                        <button>Inpiration</button>
                                    </li>
                                    <li>
                                        <button>Inpiration</button>
                                    </li>
                                    <li>
                                        <button>Inpiration</button>
                                    </li>
                                    <li>
                                        <button>Inpiration</button>
                                    </li>
                                    <li>
                                        <button>Inpiration</button>
                                    </li>
                                    <li>
                                        <button>Inpiration</button>
                                    </li>
                                    <li>
                                        <button>Inpiration</button>
                                    </li>
                                    <li>
                                        <button>Inpiration</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-card__img">
                                <img src="<?= asset("img/pic_01.jpg") ?>" class="img-fluid" alt="Responsive image">
                                <ul>
                                    <li>
                                        <button class="c-card__button tiny__button like">
                                            <span>Like</span>
                                            <?php include("img/SVG/like.php") ?>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="c-card__button tiny__button bookmark" id="gallery-btn-1">
                                            <span>Bookmarked</span>
                                            <?php include("img/SVG/bookmark.php") ?>
                                        </button>
                                    </li>
                                </ul>
                                <div class="c-card__details">
                                    <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                    <div class="c-card__details__creators">
                                        <figure>
                                            <img src="<?= asset("img/author_1.jpg") ?>" alt="">
                                        </figure>
                                        <div>
                                            <span>Published by</span>
                                            <span>Joshua V.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="c-card tiny">
                            <div class="c-card__img">
                                <img src="<?= asset("img/pic_01.jpg") ?>" class="img-fluid" alt="Responsive image">
                                <ul>
                                    <li>
                                        <button class="c-card__button tiny__button like">
                                            <span>Like</span>
                                            <?php include("img/SVG/like.php") ?>

                                        </button>
                                    </li>
                                    <li>
                                        <button class="c-card__button tiny__button bookmark">
                                            <span>Bookmarked</span>
                                            <?php include("img/SVG/bookmark.php") ?>
                                        </button>
                                    </li>
                                </ul>
                                <div class="c-card__details">
                                    <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                    <div class="c-card__details__creators">
                                        <figure>
                                            <img src="<?= asset("img/author_1.jpg") ?>" alt="">
                                        </figure>
                                        <div>
                                            <span>Published by</span>
                                            <span>Joshua V.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="c-card tiny">
                            <div class="c-card__img">
                                <img src="<?= asset("img/pic_01.jpg") ?>" class="img-fluid" alt="Responsive image">
                                <ul>
                                    <li>
                                        <button class="c-card__button tiny__button like">
                                            <span>Like</span>
                                            <?php include("img/SVG/like.php") ?>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="c-card__button tiny__button bookmark">
                                            <span>Bookmarked</span>
                                            <?php include("img/SVG/bookmark.php") ?>
                                        </button>
                                    </li>
                                </ul>
                                <div class="c-card__details">
                                    <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                    <div class="c-card__details__creators">
                                        <figure>
                                            <img src="<?= asset("img/author_1.jpg") ?>" alt="">
                                        </figure>
                                        <div>
                                            <span>Published by</span>
                                            <span>Joshua V.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="c-card tiny">
                            <div class="c-card__img">
                                <img src="<?= asset("img/pic_01.jpg") ?>" class="img-fluid" alt="Responsive image">
                                <ul>
                                    <li>
                                        <button class="c-card__button tiny__button like">
                                            <span>Like</span>
                                            <?php include("img/SVG/like.php") ?>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="c-card__button tiny__button bookmark">
                                            <span>Bookmarked</span>
                                            <?php include("img/SVG/bookmark.php") ?>
                                        </button>
                                    </li>
                                </ul>
                                <div class="c-card__details">
                                    <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                    <div class="c-card__details__creators">
                                        <figure>
                                            <img src="<?= asset("img/author_1.jpg") ?>" alt="">
                                        </figure>
                                        <div>
                                            <span>Published by</span>
                                            <span>Joshua V.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/interact-button.js') }}" defer></script>
@endsection
