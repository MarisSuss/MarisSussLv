@extends('layout')

@section('content')
<div class="rounded-lg p-8" style="height: calc(100vh - 160px); margin-top: 0; box-shadow: 10px 0 8px -8px rgba(255, 0, 0, 0.8), -10px 0 8px -8px rgba(255, 0, 0, 0.8);">
    <h1 class="text-5xl font-bold text-red-500 mb-6" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
        Manage Posts
    </h1>

    <div class="mb-6">
        <a href="{{ route('admin.posts.create', ['language' => $language]) }}" 
           class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-bold rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Create New Post
        </a>
    </div>

    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr class="bg-gray-700 text-gray-300">
                    <th class="px-4 py-2 text-left">Title (English)</th>
                    <th class="px-4 py-2 text-left">Title (Latvian)</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts->sortByDesc('created_at') as $post)
                    <tr class="border-t border-gray-700 hover:bg-gray-700 transition-colors duration-200">
                        <td class="px-4 py-2 text-gray-300">
                            <a href="{{ route('posts.show', ['language' => $language, 'post' => $post->id]) }}" class="text-blue-500 hover:underline">
                                {{ $post->title_en }}
                            </a>
                        </td>
                        <td class="px-4 py-2 text-gray-300">
                            <a href="{{ route('posts.show', ['language' => $language, 'post' => $post->id]) }}" class="text-blue-500 hover:underline">
                                {{ $post->title_lv }}
                            </a>
                        </td>
                        <td class="px-4 py-2 text-gray-300">
                            <a href="{{ route('admin.posts.edit', ['language' => $language, 'post' => $post->id]) }}" class="text-blue-500 hover:underline">
                                Edit
                            </a>
                            <form action="{{ route('admin.posts.delete', ['language' => $language, 'post' => $post->id]) }}" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection