<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke($language)
    {
        $posts = Post::all();

        return view('home', [
            'language' => $language,
            'posts' => $posts
        ]);
    }
}
