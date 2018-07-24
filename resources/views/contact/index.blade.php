@extends('layouts.app')
@section('content')



<form method="GET" action="/sendemail" id="sendemail">
    @csrf
    <input type="hidden" name="amt-of-images" value="1" id="amt-of-images" />
    <div class="form-group">
        <label for="name">Name: </label>
        <input id="name" class="form-control" type="text" name="name">
    </div>

    <div class="form-group">
        <label for="email">Email: </label>
        <input id="email" class="form-control" type="text" name="email">
    </div>

    <div class="form-group">
        <label for="subject">Subject: </label>
        <input id="subject" class="form-control" type="text" name="subject">
    </div>

    <div class="form-group">
        <label for="content">Your request: </label>
        <textarea id="content" class="form-control" type="text" name="content"></textarea>
    </div>



    <input type="submit" class="btn btn-primary" value="send email" />
</form>


@endsection
