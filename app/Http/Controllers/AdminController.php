<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

class AdminController extends Controller
{
    public function showLoginForm($language)
    {
        return view('admin.login', [
            'language' => $language
        ]);
    }

    public function login(Request $request, string $language)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard', ['language' => $language]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(string $language)
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login', ['language' => $language]);
    }

    public function dashboard(string $language)
    {
        return view('admin.dashboard', [
            'language' => $language
        ]);
    }

    public function messages(string $language)
    {
        $messages = Message::all();

        return view('admin.messages', [
            'language' => $language,
            'messages' => $messages
        ]);
    }

    public function showMessage(string $language, Message $message)
    {
        return view('admin.showMessage', [
            'language' => $language,
            'message' => $message
        ]);
    }
}
