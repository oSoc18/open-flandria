<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }


    public function store(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $subject = $request['subject'];
        $content = $request['message'];

        Mail::to("contact@openflandria.be")->send(new Contact($name, $email, $subject, $content));
        return view('contact.thanks');
    }
}
