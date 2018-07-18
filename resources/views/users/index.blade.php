@extends('layouts.app')

@section('content')
    <h1>Favorites</h1>
    @foreach($likes as $like)
        {{$like->project->title}}
    @endforeach
@endsection