<?php

namespace App\Http\Controllers;

use App\Project;
use App\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        if (!isset($query)) {
            $status = 'search.nosearch';
            return view('search.show')->with('status', $status)->with('query', $query);
        }

        $projects = Project::where('title', 'like', "%$query%")->orWhere('description', 'like', "%$query%")->get();

        $tag = Tag::where('name', "$query")->first();
        if (isset($tag)) {
            $projects = $projects->merge($tag->projects);
        }

        if ($projects->isEmpty()) {
            $status = 'search.none';
            return view('search.show')->with('status', $status)->with('query', $query)->with('projects', $projects);
        }

        return view('search.show')->with('query', $query)->with('projects', $projects);
    }
}
