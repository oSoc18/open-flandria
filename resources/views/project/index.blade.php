@extends('layouts.app')


@section('content')



@foreach ($project as $project)



<div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">

            <div class="caption">
              <li>Title: {{$project->title}}</li> 
              <p><li>Location: {{$project->location}}</li></p>
              <p><li>Creator: {{$project->creator}}</li></p>
              <p><li>Year: {{$project->year}}</li></p>
              <p><a href="http://127.0.0.1:8000/project/update/{{$project->id}}" class="btn btn-primary" ><input type="submit"   value="Update settings" class="btn btn-primary">  </a>
            </div>
          </div>
        </div>
      </div>


@endforeach   


@endsection

