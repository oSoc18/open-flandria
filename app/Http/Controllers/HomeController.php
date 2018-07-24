<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function sendemail(Request $request){

        $name = $request['name'];
        $email = $request['email'];
        $subject = $request['subject'];
        $content = $request['content']
;
        $mail = 'mohanad.abouzaidi@gmail.com';
        
        Mail::to($mail)->send(new Contact($name, $email, $subject,$content));

        return redirect('/sendedemail');

    }

    public function sendedemail(){

        return view('contact.email');
    }
}
