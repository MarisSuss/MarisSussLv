@extends('layout')

@section('content')
<div class="bg-gray-100 p-6 rounded-lg shadow-lg container mx-auto mt-8 px-4">
    <h3 class="text-2xl font-bold mb-4">Edit Post</h3>
    <form action="{{ route('admin.posts.update', ['language' => app()->getLocale(), 'post' => $post->id]) }}" method="POST">
        @csrf
        @method('POST') <!-- Use POST since your route is defined as POST -->
        <div class="mb-4">
            <label for="title" class="block text-lg font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="content" class="block text-lg font-medium text-gray-700">Content</label>
            <textarea name="content" id="content" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>{{ old('content', $post->content) }}</textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Update Post
            </button>
        </div>
    </form>
</div>
@endsection