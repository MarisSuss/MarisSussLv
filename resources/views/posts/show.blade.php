@extends('layout')

@section('content')
<div class="flex flex-wrap lg:flex-nowrap gap-4 mt-8 px-4 lg:px-0">

    <!-- Post Section -->
    <div class="bg-white p-6 rounded-lg shadow-lg lg:w-1/2">
        <!-- Title -->
        <h1 class="text-3xl font-bold text-center mb-6">
            {{ $language === 'en' ? $post->title_en : $post->title_lv }}
        </h1>

        <!-- Dates -->
        <div class="text-gray-500 text-right mb-6">
            <!-- Created At -->
            Created: {{ \Carbon\Carbon::parse($post->created_at)->format('d.m.Y') }}

            <!-- Updated At (if different from Created At) -->
            @if ($post->updated_at && $post->updated_at != $post->created_at)
                <br>Last updated: {{ \Carbon\Carbon::parse($post->updated_at)->format('d.m.Y') }}
            @endif
        </div>

        <!-- Description -->
        <div class="text-gray-600 text-center mb-6">
            {{ $language === 'en' ? $post->description_en : $post->description_lv }}
        </div>

        <!-- Content -->
        <div class="text-gray-600 overflow-hidden">
            {!! $language === 'en' ? $post->content_en : $post->content_lv !!}
        </div>
    </div>

    <!-- Showcase Section -->
    <div class="bg-white p-6 rounded-lg shadow-lg lg:w-1/2">
        <div class="text-gray-600 overflow-hidden">
            {!! $language === 'en' ? $post->showcase_en : $post->showcase_lv !!}
        </div>
    </div>

</div>
@endsection