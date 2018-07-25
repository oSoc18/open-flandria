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
                </ul>
            </nav>
            <div class="row gallery__content">
                @foreach($likes as $like)
                <!-- First Card -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="c-card secondary" onclick="window.location.href='/projects/{{$like->project->id}}'">
                        <div class="c-card__img" style="display: block; background: url({{$like->project->images->first()->file}});">
                            <div class="c-card__details">
                                <h1 class="u-title type-3 u-title__card">{{$like->project->title}}</h1>
                                <div class="c-card__details__creators">
                                    <div>
                                        <span>{{$like->project->user->name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section class="own-gallery">
            <h1 class="u-title type-2 u-uppercase" href="#">Galleries</h1>
            <ul class="gallery-wrap row">
                @foreach($galleries as $gallery)
                <li class="col-lg-2">
                    <a href="/galleries/{{$gallery->id}}" class="gallery-item">{{$gallery->name}}</a>
                </li>
                @endforeach
            </ul>
        </section>
    </section>

@endsection
