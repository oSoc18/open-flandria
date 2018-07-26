<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Gallery;
use App\Project;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $galleries = $user->galleries;
        return view('gallery.index')->with('galleries', $galleries)->with('likes', $user->likes);
    }

    public function select(Request $request, Project $project){
        $galleries = Auth::user()->galleries;
        return view('gallery.select')->with('project', $project)->with('galleries', $galleries);
    }

    public function add(Request $request, Project $project) {
        $gallery_new = $request['gallery_new'];
        if(!isset($gallery_new)) {
            $gallery_choice = $request['gallery_choice'];
            $gallery = Gallery::where('name', $gallery_choice)->first();
        } else {
            $gallery = new Gallery;
            $gallery->name = $gallery_new;
            $gallery->save();
            $gallery->user()->save(Auth::user());
        }

        $gallery->projects()->save($project);
        return redirect(url('/projects/'.$project->id));
    }

    public function show(Gallery $gallery)
    {
        return view('gallery.show')->with('gallery', $gallery);
    }

    public function update(Request $request, Gallery $gallery, Project $project)
    {
        if ($gallery->projects->contains($project->id)) {
            $gallery->projects->forget($project->id);
        }
        $gallery->projects()->save($project);
    }

    public function create()
    {
        $user = Auth::user();
        $galleries = $user->galleries;

        return view('gallery.create')->with('galleries', $galleries);
    }

    public function store(Request $request)
    {
        $gallery = new Gallery;
        $gallery->name = $request['name'];
        $gallery->save();
        $gallery->user()->save(Auth::user());

        return redirect()->back();
    }

    public function edit(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $gallery->name = $validated['name'];
        $gallery->save();

        return redirect()->back();
    }

    public function manageAllGalleries()
    {
        $galleries = Auth::user()->galleries;
        return view('gallery.manageAllGalleries')->with('galleries', $galleries);
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->back();

    }
}
