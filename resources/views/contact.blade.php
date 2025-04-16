@extends('layout')

@section('content')
<div class="rounded-lg" style="height: calc(100vh - 160px); margin-top: 0; box-shadow: 10px 0 8px -8px rgba(255, 0, 0, 0.8), -10px 0 8px -8px rgba(255, 0, 0, 0.8);">
    <!-- Contact Section -->
    <div class="flex flex-col lg:flex-row items-stretch h-full">
        <!-- Left Section: Contact Info -->
        <div class="lg:w-2/5 w-full p-4">
            <h2 class="text-5xl font-bold text-red-500 mb-3" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                {{ __('contact.get_in_touch') }}
            </h2>
            <p class="text-xl mb-4">
                {{ __('contact.contact_details') }}
            </p>
            <ul class="text-xl space-y-2">
                <li><strong>{{ __('contact.email') }}:</strong> marissuss@gmail.com</li>
                <li><strong>{{ __('contact.phone') }}:</strong> +371 26372382</li>
            </ul>
        </div>

        <!-- Right Section: Contact Form -->
        <div class="lg:w-3/5 w-full p-4">
            <form action="{{ url(app()->getLocale()) . '/contact' }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-lg font-bold text-red-500 mb-2" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                        {{ __('contact.name') }}
                    </label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm" placeholder="{{ __('contact.name_placeholder') }}" required>
                </div>
                <div>
                    <label for="email" class="block text-lg font-bold text-red-500 mb-2" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                        {{ __('contact.email') }}
                    </label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm" placeholder="{{ __('contact.email_placeholder') }}" required>
                </div>
                <div>
                    <label for="message" class="block text-lg font-bold text-red-500 mb-2" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                        {{ __('contact.message') }}
                    </label>
                    <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm" placeholder="{{ __('contact.message_placeholder') }}" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-bold rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        {{ __('contact.send_message') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection