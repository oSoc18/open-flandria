@extends('layouts.app')





@section('content')


@include('layouts.gallery')
<ul>

        <li>{{$gallery->name}}</li> 

</ul>


<form action="/gallery/remove/{{$gallery->id}}" method="POST">
        @method('DELETE')
        @csrf
        <input class="btn btn-danger" type="submit" value="Remove gallery" name="remove">
    </form>

    <form action="/gallery/update/{{$gallery->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
                <label for="name">Title:</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$gallery->name}}">
            </div>
    
        <input type="submit" value="Update settings" class="btn btn-primary">
    </form>

@endsection
