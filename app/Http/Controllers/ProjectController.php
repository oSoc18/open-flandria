<?php

namespace App\Http\Controllers;

use App\Project;
use App\Image;
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
        //
        $project = Project::select('id','title','location','year','creator')->get();;

        $projectImage= Image::select('file','credit','copyright','year')->get();

        return view('project.index')->with('project',$project)->with('projectImages', $projectImage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $project = Project::select('title','location','year','creator')->where('id', $id)->get();

        return view('project.show',compact('project', $project));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'creator' => 'required',
            'year' => 'required',
            
        ]); 

        $project = Project::find($id);

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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        return view('project.update')->with('project',$project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $project = Project::find($id);

            $project->delete();
    
            return redirect()->route('index');
    }
}
