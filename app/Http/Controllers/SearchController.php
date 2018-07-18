<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $tagName = $request->input('query');
        $errors = [];

        $tag = Tag::where('name', $tagName)->first();
        if(!$tag){
            array_push($errors, "search.noexist");
            return view('search.show')->with([
                'errors' => $errors,
            ]);
        }

        if($tag->projects->isEmpty()) {
            array_push($errors, "search.none");
            return view('search.show')->with([
                'errors' => $errors,
            ]);
        }

        return view('search.show')->with('tag', $tag);
    }
}
