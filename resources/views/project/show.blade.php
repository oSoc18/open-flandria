@extends('layouts.app')

@section('content')

    <section class="show show__content">
        <div class="row">
            <div class="col-lg-8">
                <figure class="show__img">
                    <img src="<?= asset("img/pic_02.jpg") ?>" class="img-fluid" alt="Responsive image">
                </figure>
                <div class="show__panel">
                    <ul class="row show__panel__buttons">
                        <li class="show__panel__item col-lg-2">
                            <button class="tiny__button like">
                                <span>Like</span>
                                <?php include ("img/SVG/like.php") ?>
                            </button>
                        </li>
                        <li class="show__panel__item col-lg-2">
                            <button class="tiny__button bookmark">
                                <span>Bookmark</span>
                                <?php include ("img/SVG/bookmark.php") ?>
                            </button>
                        </li>
                        <li class="show__panel__item col-lg-2">
                            <button class="tiny__button download">
                                <span>Download</span>
                                <?php include ("img/SVG/download.php") ?>
                            </button>
                        </li>
                        <li class="show__panel__item col-lg-2">
                            <button class="tiny__button share">
                                <span>Share</span>
                                <?php include ("img/SVG/share.php") ?>
                            </button>
                        </li>
                        <li class="show__panel__item col-lg-4 text-right">
                            License : <span>Unknown</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <h1 class="show__title u-title type-2">
                    {{$project->title}}
                    @if($project->year) ({{$project->year}}) @endif

                </h1>
                <span class="u-title type-4 u-uppercase bold u-title__category">Bridge</span>
                <span class="u-title type-4 u-uppercase bold u-title__location">Antwerp</span>
                <div class="show__section show__desc">
                    <h1 class="show__subtitle u-title type-4">
                        Description
                    </h1>
                    <p>
                        The bridge is located in Antwerp and connects the Eilandje and the Park Spoor Noord;
                        Open for the pedestrians and the bicyclists;
                        The bridge is 67 meters long.
                    </p>
                </div>
                <div class="show__section show__creators">
                    <ul>
                        <li>
                            <h1 class="show__subtitle u-title type-4">Architect</h1>
                            <div class="show__creators__profile">
                                <img src="" alt="">
                                <span>Ney & Patners</span>
                            </div>
                        </li>
                        <li>
                            <h1 class="show__subtitle u-title type-4">Photographer</h1>
                            <div class="show__creators__profile">
                                <img src="" alt="">
                                <span>Bart Gosselin</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="show__section show__keywords">
                    <h1 class="show__subtitle u-title type-4">Keywords</h1>
                    <ul>
                        <li class="show__keywords__item u-uppercase">
                            <span>#Eco</span>
                        </li>
                        <li class="show__keywords__item u-uppercase">
                            <span>#Serenity</span>
                        </li>
                        <li class="show__keywords__item u-uppercase">
                            <span>#Green</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<form action="/galleries/addproject/{{$project->id}}" method="POST">
        @method('PUT')
        @csrf
        <select id="name" name="name">
        <div class="form-group">

        @foreach ($galleries as $gallery)
                <option value="{{$gallery->name}}" id="{{$gallery->name}}" name="name">{{$gallery->name}}</option>
        @endforeach

        </div>
        
        </select>
        
        <input type="submit" value="Update settings" class="btn btn-primary" >
    </form>




@endsection