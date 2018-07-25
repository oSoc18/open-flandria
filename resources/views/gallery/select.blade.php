@extends('layouts.app')

@section('content')
    <h1 class="u-title type-2">Add to gallery</h1>
    <div class="row">
        <form action="/galleries/add/{{$project->id}}" method="post">
            @csrf
            <div>
                <label for="gallery_new">Create a new one:</label>
                <input type="text" id="gallery_new" name="gallery_new" class="form-control">
            </div>

            @if(Auth::check() && !Auth::user()->galleries->isEmpty())
                <p>Or</p>
                <div>
                    <label for="gallery_choice">Choose one: </label>
                    <select name="gallery_choice" id="gallery_choice" class="form-control">
                        @foreach($galleries as $gallery)
                            <option value="{{$gallery->name}}">{{$gallery->name}}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            <input type="submit" value="Add to gallery" class="c-button">
        </form>
    </div>
@endsection
