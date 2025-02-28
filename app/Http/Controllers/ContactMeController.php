<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactMeController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::to('marissuss@gmail.com')->send(new ContactFormMail($request->all()));

        // Redirect to the home page with a success message
        return redirect(url('/' . app()->getLocale()))->with('success', 'Your message has been sent successfully!');
    }
}