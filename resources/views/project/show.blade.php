@extends('layouts.app')





@section('content')


<ul>

        <li>{{$project->year}}</li> 

</ul>

<form action="/galleries/addproject/{{$project->id}}" method="POST">
        @method('PUT')
        @csrf
        <select id="name" name="name">
        <div class="form-group">

        @foreach ($galleries as $gallery)
                <option value="{{$gallery->name}}" id="{{$gallery->name}}" name="name">{{$gallery->name}}</option>
        @endforeach

        </div>
        
        </select>
        
        <input type="submit" value="Update settings" class="btn btn-primary" >
    </form>




@endsection
