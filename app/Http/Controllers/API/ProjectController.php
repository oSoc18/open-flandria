<?php

namespace App\Http\Controllers\API;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index() {
        return Project::with('images')->with('user')->withCount('likes')->get();
    }
}
