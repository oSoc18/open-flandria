@extends('layouts.app')

@section('content')
    @if(isset($status))
    <div>
        <div class="alert alert-warning">
            {{__($status)}}
        </div>
    </div>
    @endif

    @if(isset($projects))
        @foreach($projects as $project)
            <div>
                <h1>{{$project->title}}</h1>
                <a href="{{url('projects', $project->id)}}">{{__('projects.more')}}</a>
            </div>
        @endforeach
    @endif
@endsection