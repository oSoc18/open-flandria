@extends('layouts.app')

@section('content')
    <section class="homepage">
        <h1 class="u-title type-0 u-title__baseline">
            <span>{{__('varia.slogan1')}}</span>
            <span>{{__('varia.slogan2')}}</span>
        </h1>
        <div class="homepage__content row">
            <div class="col-lg-6">
                <h1 class="u-title type-3 u-title__homepage">{{__('projects.mostliked')}}</h1>
                <div class="c-card">
                    <div class="c-card__img">
                        <img src="<?= asset("storage/" . $most_likes_week->images->first()['file']) ?>" class="img-fluid" alt="Responsive image">
                        <div class="c-card__details">
                            <h1 class="u-title type-3 u-title__card">{{$most_likes_week->title}}</h1>
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
                            <div class="c-card__details__creators">
                                <figure>
                                    <img src="" alt="">
                                </figure>
                                <div>
                                    <span>{{__('projects.photographer')}}</span>
                                    <span>{{$most_likes_week->user->name}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <h1 class="u-title type-3 u-title__homepage">Other projects</h1>
                <div class="row">
                    @foreach($random_projects as $project)
                        <div class="col-lg-6 col-md-6">
                            <div class="c-card tiny">
                                <div class="c-card__img">
                                    <img src="<?= asset("storage/" . $project->images->first()['file']) ?>" class="img-fluid" alt="Responsive image">
                                    <div class="c-card__details">
                                        <h1 class="u-title type-3 u-title__card">{{$project->title}}</h1>
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
                                        <div class="c-card__details__creators">
                                            <figure>
                                                <img src="<?= asset("img/author_1.jpg") ?>" alt="">
                                            </figure>
                                            <div>
                                                <span>{{__('projects.photographer')}}</span>
                                                <span>{{$project->user->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
