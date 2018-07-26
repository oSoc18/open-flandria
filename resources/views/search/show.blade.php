@extends('layouts.app')

@section('content')
    <section class="search">
        @if(isset($status))
            <div>
                <div class="alert alert-warning">
                    {{__($status)}}
                </div>
            </div>
        @else
            <h1 class="search__title u-title type-2 u-uppercase">You searched for: {{$query}}</h1>
        @endif
        <div class="row">

            @if(isset($projects))
                @foreach($projects as $project)
                    <div class="col-lg-4">
                        <div class="c-card">
                            <div class="c-card__img"
                                 style="background: url({{$project->images->first()->file}}); display: block;">
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
    <script src="{{ asset('js/interact-button.js') }}" defer></script>
@endsection
