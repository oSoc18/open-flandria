<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    // user settings page 
    public function index() {
       $user = Auth::user(); 
       return view('users.index')->with('user', $user);
    }

    public function edit(Request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email'
        ]); 
        $user = Auth::user();

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        $user->save();

        return redirect()->route('users.settings');
    }

    public function destroy() {
        $user = Auth::user();
        Auth::logout();
        $user->delete();

        return redirect()->route('index');
    }
}
