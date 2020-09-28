<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// use Illuminate\Support\Facades\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);
        // Mail::raw("It Works", function ($message) {
        //     $message->to(request('email'))
        //         ->subject('Hello There');
        // });
        // Mail::to(request('email'))
        //     ->send(new ContactMe("Shirts"));
        Mail::to(request('email'))
            ->send(new Contact());
        return redirect('/contact')
            ->with('message', "Email Sent!");
    }
}
