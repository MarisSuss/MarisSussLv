@extends('layout')

@section('content')

<a href="{{ route('admin.posts.create', ['language' => app()->getLocale()]) }}" class="btn btn-primary">Create New Post</a>

<h1 class="text-2xl font-bold mt-4">Your Posts</h1>

@if($posts->isEmpty())
    <p class="mt-4 text-gray-600">No posts available. Create a new post to get started!</p>
@else
    <div class="mt-4">
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Content</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->title }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ Str::limit($post->content, 50) }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ route('admin.posts.edit', ['language' => app()->getLocale(), 'post' => $post->id]) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('admin.posts.delete', ['language' => app()->getLocale(), 'post' => $post->id]) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@endsection