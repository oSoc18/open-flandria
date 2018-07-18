<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;

        $galleries = Gallery::all()->where('user_id',$user_id);

        return view('gallery.manageAllGalleries')->with('galleries', $galleries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user_id = Auth::user()->id;

        $galleries = Gallery::all()->where('user_id',$user_id);

        return view('gallery.create')->with('galleries', $galleries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery;
        $gallery->name = $request['name'];
        $gallery->user_id = Auth::user()->id;
        $gallery->save();

        $user_id = Auth::user()->id;

        $galleries = Gallery::all()->where('user_id',$user_id);

        return redirect('gallery')->with('galleries', $galleries);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = Auth::user()->id;

        $gallery = Gallery::find($id);
        $galleries = Gallery::all()->where('user_id',$user_id);

        return view('gallery.show')->with('gallery', $gallery)->with('galleries',$galleries);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Gallery $gallery)
    {

        $validated = $request->validate([
            'name' => 'required'
        ]);

        $gallery->name = $validated['name'];
        $gallery->user_id = Auth::user()->id;
        $gallery->save();

        $user_id = Auth::user()->id;
        $galleries = Gallery::all()->where('user_id',$user_id);

        return redirect('gallery')->with('gallery', $gallery)->with('galleries',$galleries);

    }
    public function manageAllGalleries(){

        $user_id = Auth::user()->id;

        $galleries = Gallery::all()->where('user_id',$user_id);

        return view('gallery.manageAllGalleries')->with('galleries', $galleries);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gallery = Gallery::find($id);
        $gallery->delete();
        
        $user_id = Auth::user()->id;

        $galleries = Gallery::all()->where('user_id',$user_id);

        return redirect('gallery')->with('galleries', $galleries);

    }
}
