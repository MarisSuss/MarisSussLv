@extends('layout')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg container mx-auto mt-8 px-4 lg:w-1/2">

    <!-- Title -->
    <h1 class="text-3xl font-bold text-center mb-6">
        {{ $language === 'en' ? $post->title_en : $post->title_lv }}
    </h1>

    <!-- Time -->
    <div class="text-gray-500 text-right mb-6">
        {{ \Carbon\Carbon::parse($post->created_at)->format('d.m.Y') }}
    </div>

    <!-- Description -->
    <div class="text-gray-600 text-center mb-6">
        {{ $language === 'en' ? $post->description_en : $post->description_lv }}
    </div>

    <!-- Content -->
    <div class="text-gray-600 overflow-hidden break-words">
        {!! $language === 'en' ? $post->content_en : $post->content_lv !!}
    </div>

</div>
@endsection