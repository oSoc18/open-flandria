@extends('layouts.app')


@section('content')


<h1>All projects: </h1>


 <div class="jumbotron">
        <h1>Project of the week:</h1>
        <p><img src="test.jpg"></p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">See the project </a></p>
       
</div>


<div class="row">
@foreach ($project as $project)




        <div class="col-sm-5 col-md-3">
          <div class="thumbnail">
            <img src="test.png">
            <div class="caption">
              <li>Title: {{$project->title}}</li> 
              <p><li>Location: {{$project->location}}</li></p>
              <p><li>Creator: {{$project->creator}}</li></p>
              <p><li>Year: {{$project->year}}</li></p>
              <p><a href="http://127.0.0.1:8000/project/update/{{$project->id}}" class="btn btn-primary" ><input type="submit"   value="Update settings" class="btn btn-primary">  </a>
            </div>
          </div>
        </div>
     


@endforeach   
</div>

@endsection

