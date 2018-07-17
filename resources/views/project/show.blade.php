@extends('layouts.app')




@section('content')

    <section class="show">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <figure class="show__img">
                    <img src="" alt="">
                </figure>
                <div class="show__panel">
                    <ul>
                        <li>
                            <button class="tiny__button like">
                                Like
                            </button>
                        </li>
                        <li>
                            <button class="tiny__button bookmark">
                                Bookmark
                            </button>
                        </li>
                        <li>
                            <button class="tiny__button download">
                                Download
                            </button>
                        </li>
                        <li>
                            <button class="tiny__button share">
                                Share
                            </button>
                        </li>
                        <li>
                            License : <span>Unknown</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <h1 class="u-title type-1 u-title__show">
                    {{$project->title}}
                    @if($project->year) ({{$project->year}}) @endif

                </h1>
                <span class="u-title type-2 u-title__category">Bridge</span>
                <span class="u-title type-2 u-title__location">Antwerp</span>
                <div class="show__desc">
                    <h1 class="u-title type-3">
                        Description
                    </h1>
                    <p>
                        The bridge is located in Antwerp and connects the Eilandje and the Park Spoor Noord;
                        Open for the pedestrians and the bicyclists;
                        The bridge is 67 meters long.
                    </p>
                </div>
                <div class="show__creators">
                    <ul>
                        <li>
                            <h1>Architect</h1>
                            <div class="show__creators__profile">
                                <img src="" alt="">
                                <span>Ney & Patners</span>
                            </div>
                        </li>
                        <li>
                            <h1>Photographer</h1>
                            <div class="show__creators__profile">
                                <img src="" alt="">
                                <span>Bart Gosselin</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="show__keywords">
                    <ul>
                        <li>
                            <a href="#">#Eco</a>
                        </li>
                        <li>
                            <a href="#">Serenity</a>
                        </li>
                        <li>
                            <a href="#">Green</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



@endsection