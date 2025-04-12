@extends('layout')

@section('content')
<div class="bg-gray-100 p-6 rounded-lg shadow-lg container mx-auto mt-8 px-4">
    <h3 class="text-2xl font-bold mb-4">Create a New Post</h3>
    <form action="{{ route('admin.posts.store', ['language' => app()->getLocale()]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Title En -->
        <div class="mb-4">
            <label for="title_en" class="block text-lg font-medium text-gray-700">Title (English)</label>
            <input type="text" name="title_en" id="title_en" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
        </div>
        <!-- Description En -->
        <div class="mb-4">
            <label for="description_en" class="block text-lg font-medium text-gray-700">Description (English)</label>
            <textarea name="description_en" id="description_en" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required></textarea>
        </div>
        <!-- Content En -->
        <div class="mb-4">
            <label for="content_en" class="block text-lg font-medium text-gray-700">Content (English)</label>
            <textarea name="content_en" id="content_en" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required></textarea>
        </div>
        <!-- Showcase En -->
        <div class="mb-4">
            <label for="showcase_en" class="block text-lg font-medium text-gray-700">Showcase (English)</label>
            <textarea name="showcase_en" id="showcase_en" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
        </div>
        <!-- Title Lv -->
        <div class="mb-4">
            <label for="title_lv" class="block text-lg font-medium text-gray-700">Title (Latvian)</label>
            <input type="text" name="title_lv" id="title_lv" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
        </div>
        <!-- Description Lv -->
        <div class="mb-4">
            <label for="description_lv" class="block text-lg font-medium text-gray-700">Description (Latvian)</label>
            <textarea name="description_lv" id="description_lv" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required></textarea>
        </div>
        <!-- Content Lv -->
        <div class="mb-4">
            <label for="content_lv" class="block text-lg font-medium text-gray-700">Content (Latvian)</label>
            <textarea name="content_lv" id="content_lv" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required></textarea>
        </div>
        <!-- Showcase Lv -->
        <div class="mb-4">
            <label for="showcase_lv" class="block text-lg font-medium text-gray-700">Showcase (Latvian)</label>
            <textarea name="showcase_lv" id="showcase_lv" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
        </div>
        <!-- Image Path -->
        <div class="mb-4">
            <label for="image_path" class="block text-lg font-medium text-gray-700">Image Path</label>
            <input type="text" name="image_path" id="image_path" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        <!-- Submit Button -->
        <div class="text-right">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create Post
            </button>
        </div>
    </form>
</div>
@endsection