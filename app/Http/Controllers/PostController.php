<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(string $language)
    {
        $posts = Post::all(); // Retrieve all posts
        return view('admin.posts.index', compact('posts', 'language'));
    }

    public function show( string $language, Post $post)
    {
        return view('posts.show', compact('post', 'language'));
    }

    public function search( string $language, Request $request)
    {
        $query = $request->input('query');
        $posts = Post::where('title_en', 'LIKE', "%{$query}%")
            ->orWhere('content_en', 'LIKE', "%{$query}%")
            ->orWhere('title_lv', 'LIKE', "%{$query}%")
            ->orWhere('content_lv', 'LIKE', "%{$query}%")
            ->orWhere('description_en', 'LIKE', "%{$query}%")
            ->orWhere('description_lv', 'LIKE', "%{$query}%")
            ->get();

        return view('admin.posts.index', compact('posts', 'language'));
    }

    public function create($language)
    {
        return view('admin.posts.create', compact('language'));
    }

    public function store( string $language, Request $request)
    {
        // Validate the request data
        $request->validate([
            'title_en' => 'required|string|max:255',
            'description_en' => 'required|string|max:255',
            'content_en' => 'required|string',
            'showcase_en' => 'required|string',
            'title_lv' => 'required|string|max:255',
            'description_lv' => 'required|string|max:255',
            'content_lv' => 'required|string',
            'showcase_lv' => 'required|string',
            'image_path' => 'nullable|string', // Ensure image_path is nullable and a string
        ]);
    
        // Create a new post using mass assignment
        Post::create($request->only(
            'title_en',
            'description_en',
            'content_en',
            'showcase_en',
            'title_lv',
            'description_lv',
            'content_lv',
            'showcase_lv',
            'image_path'
        ));
    
        // Redirect to the posts index page with a success message
        return redirect()->route('admin.posts.index', ['language' => $language])
                         ->with('success', 'Post created successfully!');
    }

    public function edit(string $language, Post $post)
    {
        return view('admin.posts.edit',
            [
                'post' => $post,
                'language' => $language,
            ]
        );
    }

    public function update(string $language, Post $post, Request $request)
    {
        // Validate the request data
        $request->validate([
            'title_en' => 'required|string|max:255',
            'description_en' => 'required|string|max:255',
            'content_en' => 'required|string',
            'showcase_en' => 'required|string',
            'title_lv' => 'required|string|max:255',
            'description_lv' => 'required|string|max:255',
            'content_lv' => 'required|string',
            'showcase_lv' => 'required|string',
            'image_path' => 'nullable|string', 
        ]);
    
        // Update the post using mass assignment
        $post->update($request->only(
            'title_en',
            'description_en',
            'content_en',
            'showcase_en',
            'title_lv',
            'description_lv',
            'content_lv',
            'showcase_lv',
            'image_path'
        ));
    
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