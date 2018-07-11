@extends('layouts.app')

@section('content')

<form action="/settings/edit" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" class="form-control" value="{{$user->email}}">
    </div>

    <input type="submit" value="Update settings" class="btn btn-primary">
</form>

<form action="/settings/remove" method="POST">
    @method('DELETE')
    @csrf
    <input class="btn btn-danger" type="submit" value="Remove account" name="remove">
</form>
@endsection
