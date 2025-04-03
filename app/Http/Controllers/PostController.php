<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index($language)
    {
        $posts = Post::all(); // Retrieve all posts
        return view('admin.posts.index', compact('posts', 'language'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request, $language)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        // Create a new post using mass assignment
        Post::create($request->only('title', 'content'));
    
        // Redirect to the posts index page with a success message
        return redirect()->route('admin.posts.index', ['language' => $language])
                         ->with('success', 'Post created successfully!');
    }

    public function edit($language, Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $language, Post $post)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        // Update the post using mass assignment
        $post->update($request->only('title', 'content'));
    
        // Redirect to the posts index page with a success message
        return redirect()->route('admin.posts.index', ['language' => $language])
                         ->with('success', 'Post updated successfully!');
    }

    public function destroy(string $language, Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index', ['language' => $language])
                         ->with('success', 'Post deleted successfully!');
    }
}