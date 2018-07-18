<?php

namespace App\Http\Controllers\Auth;

use App\Mail\VerifyAccount;
use App\User;
use App\Role;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['guest', 'auth']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:10|max:100|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'verify_token' => str_random(16),
        ]);

        Mail::to($user)->send(new VerifyAccount($user));

        return $user;
    }

    protected function verify($token) {
        $user = User::where('verify_token', $token)->first();
        if(!$user) {
            return redirect('/login')->with('warning', "Deze account werd niet gevonden.");
        }
        if($user->verified) {
            return redirect('/login')->with('status', "Deze account is al geverifieerd.");
        }

        $user->verify_token = null;
        $user->verified = 1;
        $user->save();
        return redirect('/login')->with('status', "Bedankt om uw account te verifieren.");
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status', "We zenden u een verificatie e-mail. Gelieve uw account te verifieren.");
    }
}
