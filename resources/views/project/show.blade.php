@extends('layouts.app')


@section('content')


<h1>Result for your Search: #{{$search}} </h1>


@if($allProjects != null)
<h2>PROJECT:</h2>
<div class="row">

<?php $exist = array(); ?>
@foreach ($allProjects as $projectL)

        <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                  
                  <div class="caption">
                    <li>Title: {{$projectL->title}}</li> 
                    <p><li>Location: {{$projectL->location}}</li></p>
                    <p><li>Creator: {{$projectL->creator}}</li></p>
                    <p><li>Year: {{$projectL->year}}</li></p>
                    <p><li>Description: {{$projectL->description}}</li></p>
                    <p><a href="/project/update/{{$projectL->id}}" class="btn btn-primary" ><input type="submit"   value="Update settings" class="btn btn-primary">  </a>
                  </div>
                </div>
              </div>
        <?php array_push($exist, $projectL->id);?>
@endforeach
        </div>
@endif

@if ($projects != null)

<div class="row">

@foreach($projects as $project)
 @if (!(in_array($project->id, $exist)))
<div class="col-sm-5 col-md-3">
        <div class="thumbnail">
          
          <div class="caption">
            <li>Title: {{$project->title}}</li> 
            <p><li>Location: {{$project->location}}</li></p>
            <p><li>Creator: {{$project->creator}}</li></p>
            <p><li>Year: {{$project->year}}</li></p>
            <p><li>Description: {{$project->description}}</li></p>
            <p><a href="/project/update/{{$project->id}}" class="btn btn-primary" ><input type="submit"   value="Update settings" class="btn btn-primary">  </a>
          </div>
        </div>
      </div>
@endif

@endforeach

</div>

@endif

@if($allProjects == null && $projects ==null)

        <br><br><h1>{{$error}}</h1>

@endif
<div class="row">
  
</div>

@endsection