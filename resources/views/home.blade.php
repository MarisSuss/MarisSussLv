@extends('layout')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold mb-4">{{ __('home.greeting') }}</h2>
    <p class="text-lg mb-4">Welcome to my programming portfolio. Here you will find a collection of my projects, skills, and experiences in software development.</p>
    
    <!-- Section for all posts -->
    <h3 class="text-2xl font-semibold mb-4">{{ __('home.all_posts') }}</h3>
    <ul class="list-disc pl-5">
        @foreach($posts as $post)
            <li class="mb-2">
                <a href="{{ route('posts.show', ['language' => $language, 'post' => $post->id]) }}" class="text-blue-500 hover:underline">{{ $post->title_en }}</a>
                <p class="text-gray-600">{{ Str::limit($post->content_en, 100) }}</p>
            </li>
        @endforeach
    </ul>

</div>
@endsection