<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Project;
use App\Image;
use App\User;
use App\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        $project->title = $request['title'];
        $project->location = $request['location'];
        $project->year = $request['year']; 
        $project->creator = $request['creator'];
        $project->user_id = Auth::user()->id;
        $project->save();

        $tagString = $request['tags'];
        $tagNames = explode(";", $tagString);
        foreach($tagNames as $tagName) {
            $tagName = trim($tagName);
            $tag = Tag::where('name', $tagName)->get();
            if(!$tag->count()) {
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
                $path = $file->store('projects/'.$project->id);
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
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
        //
    }
}
