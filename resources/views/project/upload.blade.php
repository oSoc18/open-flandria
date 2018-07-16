@extends('layouts.app')

@section('content')

<form method="POST" action="/upload" enctype="multipart/form-data">
    @csrf
    <input type="file" multiple name="images[]" id="images"/> 
    <input type="submit" value="Upload" />
</form>

@endsection
