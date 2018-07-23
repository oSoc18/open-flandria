<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function download(Image $image) {
        error_log($image);
        return response()->download(base_path().'/storage'.$image->file);
    }
}
