@extends('layouts.app')
@section('content')

@include('layouts.gallery')

<form action="add" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
            <label for="name">Gallery Name:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <input type="submit" value="Create a new Gallery" class="btn btn-primary">
    </form>
@endsection
