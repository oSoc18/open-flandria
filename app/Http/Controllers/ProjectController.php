<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Project;
use App\Image;
use App\Tag;
use Illuminate\Http\Request;
use Validator;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('project.index')->with('projects', $projects);
    }

    public function search(Request $request){
        
        $search = $request->input('search');
        $projects = null;
        $allProjects = null;

        if ((!empty($search))) {

            $tag = Tag::where('name', 'LIKE', "$search%")->first();
            $projectList = Project::where('title', 'LIKE' , "$search%")->orWhere('description', 'LIKE' , "%$search%")->get();

            if($tag){
                $projects = $tag->projects;
            }
            if($projectList){
                $allProjects = $projectList;
            }

            if($projects && $allProjects){
                
                if(!$projects->isEmpty()){
                    return view('project.show')->with('projects', $projects)->with('search',$search)->with('allProjects', $allProjects);
                }
            }else if($projects & !$allProjects){
                if(!$projects->isEmpty()){
                    return view('project.show')->with('projects', $projects)->with('search',$search);
                }
            }else if(!$projects && $allProjects){
                    return view('project.show')->with('allProjects', $allProjects)->with('search',$search)->with('projects', $projects);
            }

        }
            
            $error = 'No result found';
            return view('project.show')->with('error',$error)->with('projects',$projects)->with('search',$search)->with('allProjects', $allProjects);

        // $search = $request->input('search');

        // if ((!empty($search))) {
        //     //table tag
        //     $tag = Tag::where('name', 'LIKE', "%$search%")->first();
        //     $projectName = Project::where('title', 'LIKE', "%$search%")->first();
        //     $projectDes = Project::where('description', 'LIKE', "%$search%")->first();
        //     $projects = null;

        //     if($tag){
        //         $projects = $tag->projects;
        //     }
        //     if($projectName){
        //         $projects->push($projectName->projects);
        //     }
        //     if($projectDes){
        //         $projects->push($projectDes->projects);
        //     }

        //     if(!$projects->isEmpty()){
        //         return view('project.show')->with('projects', $projects)->with('search',$search);
        //     }          
        
        // }

        //     $error = 'No result founded';
        //     return view('project.show')->with('error',$error)->with('projects',$projects)->with('search',$search);
    }
    public function searcDh(Request $request){
        $search = $request->input('search');

        if ((!empty($search))) {
            //table tag
            $tag = Tag::where('name', 'LIKE', "%$search%")->first();
            $projectListeName = Project::where('title', 'LIKE', "%$search%")->first();
            $projectDes = Project::where('description', 'LIKE', "%$search%")->first();


            if($tag){
                $projectsTag = $tag->projects;
            }
            if($projectListeName){
                if($projectDes){
                    $projectListeName->push($projectDes);
                    $projectListe = $projectListeName;
                }
            }else {
                if($projectDes){
                    $projectListe = $projectDes;
                }
            }

            if(!$projects->isEmpty()){
                return view('project.show')->with('projects', $projects)->with('search',$search)->with('projectListe',$projectListe);
            }          
        
        }

        
        $projectListe = null;
            $error = 'No result founded';
            return view('project.show')->with('error',$error)->with('projects',$projects)->with('search',$search)->with('projectListe',$projectListe);


     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        $project->title = $request['title'];
        $project->location = $request['location'];
        $project->year = $request['year'];
        $project->creator = $request['creator'];
        $project->description=$request['description'];
        $project->user_id = Auth::user()->id;
        $project->save();

        $tagString = $request['tags'];
        $tagNames = explode(";", $tagString);
        foreach ($tagNames as $tagName) {
            $tagName = trim($tagName);
            $tag = Tag::where('name', $tagName)->first();
            if (!$tag) {
                $tag = new Tag;
                $tag->name = $tagName;
                $tag->save();
            }
            $project->tags()->save($tag);
        }

        $amtImages = $request['amt-of-images'];
        for($i = 1; $i < $amtImages; $i++) {
            $identifier = 'image-'.$i;
            $file = $request->file($identifier);
            if($request->hasFile($identifier)) {
                $image = new Image;

                $path = $file->store("public/projects/$project->id");
                $prefix = "public/";
                $path = substr($path, strlen($prefix));

                $image->file = $path;
                $image->credit = $request[$identifier.'-credit'];
                $image->copyright = $request[$identifier.'-copyright'];
                $image->year = $request[$identifier.'-year'];
                $image->project_id = $project->id;
                $image->save();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projects $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projects $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'creator' => 'required',
            'year' => 'required',
        ]);

        $project->title = $validated['title'];
        $project->location = $validated['location'];
        $project->creator = $validated['creator'];
        $project->year = $validated['year'];
        $project->save();

        return redirect()->route('index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Projects $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        return view('project.update')->with('project', $project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projects $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('index');
    }
}
