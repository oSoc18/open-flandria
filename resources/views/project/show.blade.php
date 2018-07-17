@extends('layouts.app')


@section('content')


<h1>Project Tag: #{{$tagName}} </h1>



@if ($projects)
<div class="row">
@foreach($projects as $project)

<div class="col-sm-5 col-md-3">
        <div class="thumbnail">
          <img src="<?php echo asset("storage/".$project->images->first()['file'])?>">
          <div class="caption">
            <li>Title: {{$project->title}}</li> 
            <p><li>Location: {{$project->location}}</li></p>
            <p><li>Creator: {{$project->creator}}</li></p>
            <p><li>Year: {{$project->year}}</li></p>
            <p><a href="/project/update/{{$project->id}}" class="btn btn-primary" ><input type="submit"   value="Update settings" class="btn btn-primary">  </a>
          </div>
        </div>
      </div>

@endforeach
</div>
@else <br><br> <center><h1> {{$error}} </center></h1>
@endif

<div class="row">
  
</div>

@endsection