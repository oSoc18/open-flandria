@extends('layouts.app')

@section('content')
    <section class="homepage">
        <h1 class="u-title type-0 u-title__baseline">
            <span>A visual inspiration</span>
            <span>for substainable living</span>
        </h1>
        <div class="homepage__content row">
            <div class="col-lg-6 col-sm-6">
                <h1 class="u-title type-3 u-title__homepage">Most liked projects of the week</h1>
                <div class="c-card">
                    <div class="c-card__img">
                        <img src="<?= asset("img/pic_01.jpg") ?>" alt="">
                        <div class="c-card__details">
                            <ul>
                                <li>
                                    <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                </li>
                                <li>
                                    <button class="c-card__button tiny__button like">
                                        <span>Like</span>
                                        <img src="<?= asset("/img/icons/like.svg"); ?>" alt="">
                                    </button>
                                </li>
                                <li>
                                    <button class="c-card__button tiny__button bookmark">
                                        <span>Bookmarked</span>
                                        <img src="<?= asset("/img/icons/bookmark.svg"); ?>" alt="">
                                    </button>
                                </li>
                            </ul>
                            <div class="c-card__details__creators">
                                <img src="" alt="">
                                <span>Published by</span>
                                <span>Joshua V.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <h1 class="u-title type-3 u-title__homepage">Other projects</h1>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="c-card">
                            <div class="c-card__img">
                                <img src="" alt="">
                                <div class="c-card__details">
                                    <ul>
                                        <li>
                                            <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                        </li>
                                        <li>
                                            <button class="c-card__button tiny__button like">
                                                <span>Like</span>
                                                <img src="<?= asset("/img/icons/like.svg"); ?>" alt="">
                                            </button>
                                        </li>
                                        <li>
                                            <button class="c-card__button tiny__button bookmark">
                                                <span>Bookmarked</span>
                                                <img src="<?= asset("/img/icons/bookmark.svg"); ?>" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="c-card__details__creators">
                                        <img src="" alt="">
                                        <span>Published by</span>
                                        <span>Joshua V.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="c-card">
                            <div class="c-card__img">
                                <img src="" alt="">
                                <div class="c-card__details">
                                    <ul>
                                        <li>
                                            <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                        </li>
                                        <li>
                                            <button class="c-card__button tiny__button like">
                                                <span>Like</span>
                                                <img src="<?= asset("/img/icons/like.svg"); ?>" alt="">
                                            </button>
                                        </li>
                                        <li>
                                            <button class="c-card__button tiny__button bookmark">
                                                <span>Bookmarked</span>
                                                <img src="<?= asset("/img/icons/bookmark.svg"); ?>" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="c-card__details__creators">
                                        <img src="" alt="">
                                        <span>Published by</span>
                                        <span>Joshua V.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="c-card">
                            <div class="c-card__img">
                                <img src="" alt="">
                                <div class="c-card__details">
                                    <ul>
                                        <li>
                                            <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                        </li>
                                        <li>
                                            <button class="c-card__button tiny__button like">
                                                <span>Like</span>
                                                <img src="<?= asset("/img/icons/like.svg"); ?>" alt="">
                                            </button>
                                        </li>
                                        <li>
                                            <button class="c-card__button tiny__button bookmark">
                                                <span>Bookmarked</span>
                                                <img src="<?= asset("/img/icons/bookmark.svg"); ?>" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="c-card__details__creators">
                                        <img src="" alt="">
                                        <span>Published by</span>
                                        <span>Joshua V.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="c-card">
                            <div class="c-card__img">
                                <img src="" alt="">
                                <div class="c-card__details">
                                    <ul>
                                        <li>
                                            <h1 class="u-title type-3 u-title__card">Parkburg Spoor Noord</h1>
                                        </li>
                                        <li>
                                            <button class="c-card__button tiny__button like">
                                                <span>Like</span>
                                                <img src="<?= asset("/img/icons/like.svg"); ?>" alt="">
                                            </button>
                                        </li>
                                        <li>
                                            <button class="c-card__button tiny__button bookmark">
                                                <span>Bookmarked</span>
                                                <img src="<?= asset("/img/icons/bookmark.svg"); ?>" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="c-card__details__creators">
                                        <img src="" alt="">
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
    </section>

@endsection
