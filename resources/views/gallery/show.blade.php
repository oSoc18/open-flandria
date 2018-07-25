@extends('layouts.app')

@section('content')
    <section class="search">
        <h1 class="search__title u-title type-2 u-uppercase">Projects in the gallery: {{$gallery->name}}</h1>
        <div class="row">
            @if(isset($gallery->projects))
                @foreach($gallery->projects as $project)
                    <div class="col-lg-4">
                        <div class="c-card">
                            <div class="c-card__img" onclick="window.location='/projects/{{$project->id}}'" style="background: url({{'/'.$project->images->first()->file}}); display: block;">
                                <div class="c-card__details">
                                    <h1 class="u-title type-3 u-title__card">{{$project->title}}</h1>
                                    <div class="c-card__details__creators">
                                        <div>
                                            <span>{{__('projects.creator')}}</span>
                                            <span>{{$project->user->name}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        @endif
    </section>
@endsection
