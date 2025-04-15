@extends('layout')

@section('content')
    <div class="p-8 rounded-lg" style="box-shadow: 0 0 10px 2px rgba(255, 0, 0, 0.5);">
        <!-- Profile Section -->
        <div class="flex flex-col lg:flex-row items-center lg:items-start mb-6">
            <!-- Left Section: Profile Content -->
            <div class="lg:w-3/5 w-full">
                <h2 class="text-4xl font-bold text-red-500 mb-3" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                    {{ __('home.i_am') }}
                </h2>
                <p class="text-lg mb-4">
                    {{ __('home.intro') }}
                </p>
                <p class="text-lg mb-4">
                    {{ __('home.clean_code') }}
                </p>
                <!-- Soft skill Section -->
                <div class="mb-4">
                    <h4 class="text-xl font-bold text-red-500 mb-2" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                        {{ __('home.hard_worker') }}
                    </h4>
                    <p class="text-lg">
                        {{ __('home.hard_worker_desc') }}
                    </p>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-red-500 mb-2" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                        {{ __('home.teamworker') }}
                    </h4>
                    <p class="text-lg">
                        {{ __('home.teamworker_desc') }}
                    </p>
                </div>
            </div>

            <!-- Right Section: Profile Image -->
            <div class="lg:w-2/5 w-full lg:pl-6 mt-6 lg:mt-0 flex justify-center">
                <img src="https://res.cloudinary.com/de7wfzvii/image/upload/v1743761620/test_k5upmt.jpg"
                    alt="{{ __('home.profile_picture_alt') }}" class="rounded-lg shadow-lg w-3/4 object-cover">
            </div>
        </div>

        <!-- Section for all posts -->
        <h3 class="text-3xl font-semibold text-red-500 mb-4" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
            {{ __('home.projects') }}
        </h3>

        <ul class="list-none space-y-6">
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', ['language' => $language, 'post' => $post->id]) }}"
                        class="flex items-start bg-gray-800 p-4 rounded-lg shadow-md transition-all duration-300 
                      group"
                        style="box-shadow: 0 0 10px 2px rgba(255, 0, 0, 0.5);"
                        onmouseover="this.style.boxShadow='0 0 10px 2px rgba(0, 255, 0, 0.5)';"
                        onmouseout="this.style.boxShadow='0 0 10px 2px rgba(255, 0, 0, 0.5)';">
                        <!-- Display the image if it exists -->
                        @if ($post->image_path)
                            <img src="{{ $post->image_path }}" alt="{{ __('home.post_image_alt') }}"
                                class="w-20 h-20 rounded-lg mr-4 object-cover">
                        @endif

                        <div>
                            <!-- Dynamically display title and description based on the selected language -->
                            <h4 class="text-indigo-400 text-xl font-bold">
                                {{ $language === 'en' ? $post->title_en : $post->title_lv }}
                            </h4>
                            <p class="text-gray-400 text-lg">
                                {{ $language === 'en' ? $post->description_en : $post->description_lv }}
                            </p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection