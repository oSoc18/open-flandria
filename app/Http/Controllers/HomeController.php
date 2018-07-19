<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Project;
use App\Like;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $random_projects = Project::inRandomOrder()->take(4)->get();

        $all_projects = Project::withCount('likes')->get();

        $highest_amt_likes = 0;
        $highest_project = Project::first();
        foreach($all_projects as $project) {
            if($project->likes_count > $highest_amt_likes) {
                $highest_amt_likes = $project->likes_count;
                $highest_project = $project;
            }
        }

        return view('index')->with('random_projects', $random_projects)->with('most_likes_week', $highest_project);
    }
}
