<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $user = Auth::user();
        return view('users.index')->with('likes', $user->likes);
    }
}
