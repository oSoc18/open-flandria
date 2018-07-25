@extends('layouts.app')
@section('content')
<div class="row">
@foreach ($projects as $project)
        <div class="col-sm-5 col-md-3">
          <div class="thumbnail">
            <img class="img-thumbnail" src="<?php echo asset("/".$project->images->first()['file'])?>">
            <div class="caption">
              <li>Title: {{$project->title}}</li> 
              <p><li>Location: {{$project->location}}</li></p>
              <p><li>Creator: {{$project->creator}}</li></p>
              <p><li>Year: {{$project->year}}</li></p>
               @if(Auth::check() && Auth::user()->hasAnyRole('admin'))
              <p><a href="/project/update/{{$project->id}}" class="btn btn-primary" ><input type="submit"   value="Update" class="btn btn-primary">  </a>
                @endif
            </div>
          </div>
        </div>
@endforeach   
</div>
@endsection

