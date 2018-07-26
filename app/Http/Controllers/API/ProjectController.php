<?php

namespace App\Http\Controllers\API;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index() {
        return Project::with('images', 'user')->withCount('likes')->get();
    }

    public function show($id) {
        return Project::with('images', 'user')->withCount('likes')->find($id);
    }
}
