@extends('layout')

@section('content')
    <div class="rounded-lg" style="box-shadow: 10px 0 10px -8px rgba(255, 0, 0, 0.5), -10px 0 10px -8px rgba(255, 0, 0, 0.5); margin-top: 0;">
        <!-- Success/Error Message Section -->
        <div>
            @if (session('success'))
                <div id="success-message" class="bg-green-500 text-white p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        
        <!-- Profile Section -->
        <div class="flex flex-col lg:flex-row items-stretch mb-6 p-8" style="box-shadow: 0 10px 8px -8px rgba(255, 0, 0, 0.8);">
            <!-- Left Section: Profile Content -->

            <div class="lg:w-3/5 w-full">
                <div style="box-shadow: 0 10px 8px -8px rgba(255, 0, 0, 0.8);">
                    <h2 class="text-5xl font-bold text-red-500 mb-3" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                        {{ __('home.i_am') }}
                    </h2>
                    <p class="text-xl mb-4" style="margin-right: 5px;">
                        {{ __('home.intro') }}
                    </p>
                    <p class="text-xl mb-4" style="margin-right: 5px;">
                        {{ __('home.clean_code') }}
                    </p>
                </div>
                <!-- Soft skill Section -->
                <div class="mb-4">
                    <div style="box-shadow: 0 10px 8px -8px rgba(255, 0, 0, 0.8);">
                        <h4 class="text-2xl font-bold text-red-500 mb-2" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                            {{ __('home.hard_worker') }}
                        </h4>
                        <p class="text-xl">
                            {{ __('home.hard_worker_desc') }}
                        </p>                        
                    </div>
                </div>
                <div>
                    <h4 class="text-2xl font-bold text-red-500 mb-2" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                        {{ __('home.teamworker') }}
                    </h4>
                    <p class="text-xl">
                        {{ __('home.teamworker_desc') }}
                    </p>
                </div>
            </div>

            <!-- Right Section: Profile Image -->
            <div class="lg:w-2/5 w-full flex justify-center items-center" style="padding: 0; margin: 0;">
                <img src="https://res.cloudinary.com/de7wfzvii/image/upload/q_auto:best,f_auto,w_600,h_600,c_fill,g_auto/test_k5upmt.jpg"
                    alt="Missing Profile Image"
                    class="rounded-lg shadow-lg object-cover"
                    style="width: 100%; height: 600px; margin: 0; display: block;">
            </div>
        </div>

        <!-- Section for all posts -->
        <div class="p-8">
            <h3 class="text-3xl font-semibold text-red-500 mb-4" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                {{ __('home.projects') }}
            </h3>

            <ul class="list-none space-y-6">
                @foreach ($posts as $post)
                    <li>
                        <a href="{{ route('posts.show', ['language' => $language, 'post' => $post->id]) }}"
                            class="flex items-start p-4 rounded-lg shadow-md transition-all duration-300 group"
                            style="background-color: #1a0f0f !important; box-shadow: 0 0 10px 2px rgba(255, 0, 0, 0.5);"
                            onmouseover="this.style.boxShadow='0 0 10px 2px rgba(0, 255, 0, 0.5)';"
                            onmouseout="this.style.boxShadow='0 0 10px 2px rgba(255, 0, 0, 0.5)';">
                            <!-- Display the image if it exists -->
                            @if ($post->image_path)
                                <img src="{{ $post->image_path }}" alt="{{ __('home.post_image_alt') }}"
                                    class="w-40 h-30 rounded-lg mr-4 object-cover">
                            @endif

                            <div>
                                <h4 class="text-red-500 text-xl font-bold"
                                    style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                                    {{ $language === 'en' ? $post->title_en : $post->title_lv }}
                                </h4>
                                <p class="text-lg">
                                    {{ $language === 'en' ? $post->description_en : $post->description_lv }}
                                </p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection