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

        $projects = Project::with(['likes' => function($query){
            $query->where('created_at', '>=', Carbon::today()->subWeek());
        }])->withCount('likes')->get();

        $project = $projects->where('likes_count', $projects->max('likes_count'))->first();

        return view('index')->with('random_projects', $random_projects)->with('most_likes_week', $project);
    }
}
