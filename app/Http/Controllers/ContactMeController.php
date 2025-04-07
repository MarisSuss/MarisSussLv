<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\Message;

class ContactMeController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('admin.messages', compact('messages'));
    }

    public function create($language)
    {
        return view('contact', [
            'language' => $language,
        ]);
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

        // Save the email data in the database
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect to the home page with a success message
        return redirect(url('/' . app()->getLocale()))->with('success', 'Your message has been sent successfully!');
    }
}