@extends('layout')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg container mx-auto mt-8 px-4">
    <h1 class="text-3xl font-bold mb-4">
        {{ $language === 'en' ? $post->title_en : $post->title_lv }}
    </h1>
    <p class="text-gray-600 mb-6">
        {{ $language === 'en' ? $post->content_en : $post->content_lv }}
    </p>
</div>
@endsection