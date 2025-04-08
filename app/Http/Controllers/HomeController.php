<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke($language)
    {
        // gets all posts from the database
        $posts = Post::all();

        return view('home', [
            'language' => $language,
            'posts' => $posts
        ]);
    }
}
