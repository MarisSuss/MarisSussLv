@extends('layout')

@section('content')

<div class="rounded-lg p-8" style="min-height: calc(100vh - 160px); margin-top: 0; box-shadow: 10px 0 8px -8px rgba(255, 0, 0, 0.8), -10px 0 8px -8px rgba(255, 0, 0, 0.8);">
    <h1 class="text-5xl font-bold text-red-500 mb-6 text-center" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
        Admin Login
    </h1>

    <form action="{{ url(app()->getLocale()) . '/admin/login' }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-md mx-auto">
        @csrf

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-lg font-bold text-gray-300 mb-2">Email</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-lg font-bold text-gray-300 mb-2">Password</label>
            <input type="password" id="password" name="password" class="mt-1 block w-full p-3 rounded-md border border-gray-600 bg-gray-700 text-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-bold rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Login
            </button>
        </div>
    </form>
</div>

@endsection