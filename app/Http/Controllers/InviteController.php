<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class InviteController extends Controller
{
    public function show($user_id) {
        $secret = config('custom.hmac_secret');

        $user = User::find($user_id);
        $invite_token = $user->invite;
        $token = URL::to('/invite?token=').$user_id.";".$invite_token.";".hash_hmac('sha256', $user_id.$invite_token, $secret);
        return view('invite.show')->with('token', $token);
    }

    public function create() {
        return view('invite.create');
    }

    public function store(Request $request) {
        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make(str_random(25));

        $rnd = str_random(16);
        $time = Carbon::now()->timestamp;
        $token = $rnd.$time;
        $user->invite = $token;

        $user->save();
        $user->roles()->attach(Role::where('name', $request['role'])->first());

        Mail::send('invite.email', [], function($message) {
            $message->from(config('mail.from.address'), config('mail.from.name'));
            $message->to($user->email);
        });

        return redirect("/invite/$user->id");
    }

    public function edit(Request $request) {
        $secret = config('custom.hmac_secret');

        $token = $request['token'];
        $token_parts = explode(";", $token);
        $user_id = $token_parts[0];
        $invite = $token_parts[1];
        $hmac = $token_parts[2];

        $calc_hmac = hash_hmac('sha256', $user_id.$invite, $secret);
        if (hash_equals($hmac, $calc_hmac)) {
            $user = User::find($user_id);
            return view('invite.edit')->with('user', $user);
        }

        return redirect('/');
    }

    public function update(Request $request) {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'user_token' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user_id = $validated['user_id'];
        $user_token = $validated['user_token'];

        $user = User::find($user_id);
        if(!hash_equals($user->invite, $user_token)) {
            return redirect('/');
        }

        $password = $validated['password'];
        $c_password = $validated['password_confirmation'];
        $user->password = $password;

        $user->invite = null;
        $user->save();
        Auth::login($user);

        return redirect('/');
    }
}
