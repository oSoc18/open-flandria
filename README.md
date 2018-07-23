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

app/Http/Controllers/ProjectController.php
```
//a function which will return all the projects of the database
public function index()
    {
        $projects = Project::all();

        return view('project.index')->with('projects', $projects);
    }
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
<h2>Test</h2>


## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc


