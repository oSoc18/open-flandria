@extends('layouts.app')





@section('content')
<form action="/project/edit/{{$project->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}">
        </div>

    <div class="form-group">
        <label for="location">Location:</label>
        <input type="text" class="form-control" name="location" id="location" value="{{$project->location}}">
    </div>

    <div class="form-group">
        <label for="creator">Creator:</label>
        <input id="creator" type="text" name="creator" class="form-control" value="{{$project->creator}}">
    </div>

    <div class="form-group">
            <label for="year">Year:</label>
            <input id="year" type="text" name="year" class="form-control" value="{{$project->year}}">
        </div>

    <input type="submit" value="Update settings" class="btn btn-primary">
</form>
<br>
<form action="/project/remove/{{$project->id}}" method="POST">
    @method('DELETE')
    @csrf
    <input class="btn btn-danger" type="submit" value="Remove project" name="remove">
</form>


@endsection
