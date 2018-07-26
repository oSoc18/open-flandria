<?php

namespace App\Http\Controllers\API;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function index() {
        return Image::with('project')->get();
    }
}
