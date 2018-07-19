@extends('layouts.app')

@section('content')
    <h1>{{$project->title}}</h1>
    @if(Auth::user() !== null)
    @if(Auth::user()->likes->where('project_id', $project->id)->first())
        <em>liked</em>
    @endif
    <form action="/projects/like/{{$project->id}}" method="POST">
        @csrf
        <input type="submit" value="like">
    </form>
    @endif
@endsection
