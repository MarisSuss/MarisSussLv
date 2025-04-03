@extends('layout')

@section('content')
<!-- Contact Me Section -->
<div class="bg-gray-100 p-6 rounded-lg shadow-lg container mx-auto mt-8 px-4">
    <h3 class="text-2xl font-bold mb-4">Contact Me</h3>
    <form action="{{ url(app()->getLocale()) . '/contact' }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-lg font-medium text-gray-700">Message</label>
            <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Send</button>
        </div>
    </form>
</div> 
@endsection