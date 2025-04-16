@extends('layout')

@section('content')
    <div class="rounded-lg p-8"
        style="min-height: calc(100vh - 160px); margin-top: 0; box-shadow: 10px 0 10px -8px rgba(255, 0, 0, 0.5), -10px 0 10px -8px rgba(255, 0, 0, 0.5);">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Post Content Section -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <!-- Post Title -->
                <h1 class="text-5xl font-bold text-red-500 mb-6 text-center"
                    style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                    {{ $language === 'en' ? $post->title_en : $post->title_lv }}
                </h1>

                <!-- Post Metadata -->
                <div class="text-gray-500 text-right mb-6">
                    <p>Created: {{ \Carbon\Carbon::parse($post->created_at)->format('d.m.Y') }}</p>
                    @if ($post->updated_at && $post->updated_at != $post->created_at)
                        <p>Last updated: {{ \Carbon\Carbon::parse($post->updated_at)->format('d.m.Y') }}</p>
                    @endif
                </div>
                <p class="text-gray-300 mb-4">
                    {{ $language === 'en' ? $post->description_en : $post->description_lv }}
                </p>
                <div class="text-gray-300">
                    {!! $language === 'en' ? $post->content_en : $post->content_lv !!}
                </div>
            </div>

            <!-- Showcase Section -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="text-gray-300">
                    {!! $language === 'en' ? $post->showcase_en : $post->showcase_lv !!}
                </div>
            </div>
        </div>

    </div>
@endsection
