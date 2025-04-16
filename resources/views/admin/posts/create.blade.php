@extends('layout')

@section('content')
<div class="rounded-lg p-8" style="min-height: calc(100vh - 160px); margin-top: 0; box-shadow: 10px 0 8px -8px rgba(255, 0, 0, 0.8), -10px 0 8px -8px rgba(255, 0, 0, 0.8);">
    <h1 class="text-5xl font-bold text-red-500 mb-6" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
        Create a New Post
    </h1>

    <form action="{{ route('admin.posts.store', ['language' => app()->getLocale()]) }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf

        <!-- Title (English) -->
        <div class="mb-4">
            <label for="title_en" class="block text-lg font-bold text-gray-300 mb-2">Title (English)</label>
            <input type="text" name="title_en" id="title_en" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <!-- Description (English) -->
        <div class="mb-4">
            <label for="description_en" class="block text-lg font-bold text-gray-300 mb-2">Description (English)</label>
            <textarea name="description_en" id="description_en" rows="3" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500" required></textarea>
        </div>

        <!-- Content (English) -->
        <div class="mb-4">
            <label for="content_en" class="block text-lg font-bold text-gray-300 mb-2">Content (English)</label>
            <textarea name="content_en" id="content_en" rows="5" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500" required></textarea>
        </div>

        <!-- Showcase (English) -->
        <div class="mb-4">
            <label for="showcase_en" class="block text-lg font-bold text-gray-300 mb-2">Showcase (English)</label>
            <textarea name="showcase_en" id="showcase_en" rows="3" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>

        <!-- Title (Latvian) -->
        <div class="mb-4">
            <label for="title_lv" class="block text-lg font-bold text-gray-300 mb-2">Title (Latvian)</label>
            <input type="text" name="title_lv" id="title_lv" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <!-- Description (Latvian) -->
        <div class="mb-4">
            <label for="description_lv" class="block text-lg font-bold text-gray-300 mb-2">Description (Latvian)</label>
            <textarea name="description_lv" id="description_lv" rows="3" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500" required></textarea>
        </div>

        <!-- Content (Latvian) -->
        <div class="mb-4">
            <label for="content_lv" class="block text-lg font-bold text-gray-300 mb-2">Content (Latvian)</label>
            <textarea name="content_lv" id="content_lv" rows="5" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500" required></textarea>
        </div>

        <!-- Showcase (Latvian) -->
        <div class="mb-4">
            <label for="showcase_lv" class="block text-lg font-bold text-gray-300 mb-2">Showcase (Latvian)</label>
            <textarea name="showcase_lv" id="showcase_lv" rows="3" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>

        <!-- Image Path -->
        <div class="mb-4">
            <label for="image_path" class="block text-lg font-bold text-gray-300 mb-2">Image Path</label>
            <input type="text" name="image_path" id="image_path" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Submit Button -->
        <div class="text-right">
            <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-bold rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Create Post
            </button>
        </div>
    </form>
</div>
@endsection