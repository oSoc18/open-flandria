# flandria-2050

Database Agentschap Slim Wonen en Leven.
Link if the website: openflandria.be

## Getting Started

To launch the server, open the console in the project folder an tap:

```
php artisan serve
```

### Prerequisites

To launch the project you need php 7.2.7, MySQL and a server manager (XAMP, WAMP,...)


## Database Conception

The main table is porjects. Here are the tables of the database:

-projects (id,title,location,year,creator,created_at,update_at,<span>user_id</span>)<br>
-users (id,name,email,password,remember_token,created_at,update_at)<br>
-project_tag(id,<span>project_id</span>,<span> tag_id</span>)<br>
-tags(id,name,created_at,updated_at)<br>
-galleries(id,name,created_at,updated_at,<span>user_id</span><br>
-gallery_project(id,<span>gallery_id</span>,<span>project_id</span><br>
-images(id,file,credit,copyright,year,created_at,updated_at,<span>project_id</span><br>
-migration(id,migration,batch)<br>
-password_resets(email,token,created_at)<br>


### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc


