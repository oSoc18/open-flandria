@extends('layouts.app')

@section('content')
    @if(isset($errors))
    <div>
        @foreach($errors as $error)
            <div class="alert alert-warning">
                {{__($error)}}
            </div>
        @endforeach
    </div>
    @endif

    @if(isset($tag))
        @foreach($tag->projects as $project)
            <div>
                <h1>{{$project->title}}</h1>
                <a href="{{url('projects', $project->id)}}">{{__('projects.more')}}</a>
            </div>
        @endforeach
    @endif
@endsection