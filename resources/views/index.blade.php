@extends('layouts.app') @section('content')
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
                    <a href="/projects/{{$most_likes_week->id}}">
                        <img src="<?= asset($most_likes_week->images->first()['file']) ?>" class="img-fluid" alt="Responsive image">
                    </a>
                    <div class="c-card__details">
                        <h1 class="u-title type-3 u-title__card">{{$most_likes_week->title}}</h1>
                        <ul>
                            <li>
                                <a href="#" class="like c-card__button tiny__button like">
                                    <span>Like</span>
                                    <?php include("img/SVG/like.php") ?>
                                    <form action="/projects/like/{{$most_likes_week->id}}" style="display: none;" method="POST">
                                        @csrf @method('POST')
                                    </form>
                                </a>
                            </li>
                            <li>
                                <button class="c-card__button tiny__button bookmark">
                                    <span>Bookmarked</span>
                                    <?php include("img/SVG/bookmark.php") ?>
                                </button>
                            </li>
                        </ul>
                        <div class="c-card__details__creators">
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
                            <a href="/projects/{{$project->id}}">
                                <img src="<?= asset($project->images->first()['file']) ?>" class="img-fluid" alt="Responsive image">
                            </a>
                            <div class="c-card__details">
                                <h1 class="u-title type-3 u-title__card">{{$project->title}}</h1>
                                <ul>
                                    <li>
                                        <a href="/projects/like/{{$project->id}}" class="like c-card__button tiny__button like">
                                            <span>Like</span>
                                            <?php include("img/SVG/like.php") ?>
                                            <form action="/projects/like/{{$project->id}}" style="display: none;" method="POST">
                                                @csrf @method('POST')
                                            </form>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="bookmark c-card__button tiny__button bookmark">
                                            <span>Bookmark</span>
                                            <?php include("img/SVG/bookmark.php") ?>
                                        </a>
                                    </li>
                                </ul>
                                <div class="c-card__details__creators">
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
