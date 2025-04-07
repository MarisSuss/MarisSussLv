@extends('layout')

@section('content')
<!-- Contact Me Section -->
<div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 p-8 rounded-lg shadow-lg container mx-auto mt-8 text-white">
    <h3 class="text-4xl font-bold mb-6 text-center">Get in Touch</h3>
    <p class="text-lg mb-6 text-center">
        Have a question or want to work together? Fill out the form below, and I'll get back to you as soon as possible!
    </p>
    <form action="{{ url(app()->getLocale()) . '/contact' }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="name" class="block text-lg font-medium">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Your Name" required>
        </div>
        <div>
            <label for="email" class="block text-lg font-medium">Email</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Your Email" required>
        </div>
        <div>
            <label for="message" class="block text-lg font-medium">Message</label>
            <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Your Message" required></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Send Message
            </button>
        </div>
    </form>
</div>
@endsection