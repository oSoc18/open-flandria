# flandria-2050

Database Agentschap Slim Wonen en Leven.
Link if the website: openflandria.be

## Getting Started

To launch the server, open the console in the project folder an tap:

```
php artisan serve
```

### Prerequisites

To launch the project you need php 7.2.2, MySQL and a server manager (XAMP, WAMP,...)
Be sure to have this version of php.

## Database Conception

The main table is projects. Here are the tables of the database:

-projects (id,title,location,year,creator,created_at,update_at,user_id)<br>

-users (id,name,email,password,remember_token,created_at,update_at)<br>

-project_tag(id,<span>project_id</span>,<span> tag_id</span>)<br>

-tags(id,name,created_at,updated_at)<br>

-galleries(id,name,created_at,updated_at,<span>user_id</span><br>

-gallery_project(id,<span>gallery_id</span>,<span>project_id</span><br>

-images(id,file,credit,copyright,year,created_at,updated_at,<span>project_id</span><br>

-migration(id,migration,batch)<br>

-password_resets(email,token,created_at)<br>


### PHP Laravel

With Laravel, the files are very structured. There are controllers, views, and models for every main table.
In the controllers, there are methods which allow to get data from the database. These controllers can send variable, object and collection to the view. The view can use these data thanks to php in the code. For example:

<h3>Pass data from the controller to the view</h3>

app/Http/Controllers/ProjectController.php
```
//a function which will return all the projects of the database
public function index()
    {
        $projects = Project::all();

        return view('project.index')->with('projects', $projects);
    }
 // the 'project.index' is the index view in the view/project folder   
//in the "->with" we can send the collection of project we retrieve from the database.    

```
And then to get the collection $projects in the view:
ressources/views/project/index.blade.php

```
<body>

@foreach ($projects as $project)

<p> {{$project}} </p>
<!-- and if want a specific column of the project object -->
<p> {{$project->title}} </p>

@endforeach

</body>

```
<h3>Models and relation between table</h3>

Thanks to Eloquent, Laravel allows the user to create very simple relations between the table to get the data. For example, in our database we have a relation many to many between *projects* and *tags*. A project can have a lot of tags, and tags can be part of several projects. So in the model project model we create a function: 

app/Project.php

```
	public function tags() {
		return $this->belongsToMany('App\Tag');
	}

```
app/Http/Controllers/ProjectController.php

```
$projects = $tag->projects;
//this will allow us to get all the projects which have relation with this tags.

```

<h3>Blade </h3>

Blade allows to use php in a very easy way in the views. For example to display a project we can simply do that:

```
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
@endforeach

```

We can also use @if @endif:

```
@if ($projects != null)
    @foreach ($projects as $project)
        {{$project->title}}
    @endforeach
@endif    
```

<h3>Routes</h3>

We have used web route to register our route for the application. It is stored in the file routes/web.php. In this file, we can define which route will call which method of a specified controller. We also have to choose which kind of request we are doing (PUT, GET, DELETE, POST). 
Here is an example:

```
Route::get('/project', 'ProjectController@index');

```
the name of the site + /project will return all the projects of the database because the index method in the ProjectController return that:

```
    public function index()
    {
        $projects = Project::all();

        return view('project.index')->with('projects', $projects);
    }
```
#Our own features and explanation

We have used the authentication which is provided by Laravel, to see more about it go on the official documentation: https://laravel.com/docs/5.6/authentication.

<h3> The search bar </h3>

To create the search bar we have used a simple database search. When the user tap a word in the search bar, the controller goes to the database and then see if there is a tag, project title or a description which matches to the search word. We haven't get the time to develop a more efficient way for the search bar. We have thinked about an elastic search. 

## Authors

<h3>Author</h3>
* **Mohanad ABOU ZAIDI** - https://github.com/mohanadabouzaidi
<h3>Project Contributor</h3>
* **Gwen**              -
Project Manager -https://github.com/gwenfranck
* **Julija**            
- Communication -https://github.com/
* **Brysen Ackx**       
- Fullstack developer-https://github.com/awildbrysen
* **Kevin**             
- Front-end developer -https://github.com/
* **Smayn**           
- designer -https://github.com/
* **Mohanad*
- Back-end developer -https://github.com/mohanadabouzaidi


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc


