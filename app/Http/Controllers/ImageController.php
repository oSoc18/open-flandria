<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function download(Image $image) {
        $image->downloads = $image->downloads+1;
        $image->save();
        return response()->download(public_path().'/'.$image->file);
    }
}
