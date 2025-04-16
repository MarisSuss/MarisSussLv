@extends('layout')

@section('content')
<div class="rounded-lg" style="height: calc(100vh - 160px); margin-top: 0; box-shadow: 10px 0 8px -8px rgba(255, 0, 0, 0.8), -10px 0 8px -8px rgba(255, 0, 0, 0.8);">
    <div class="p-8">
        <h1 class="text-5xl font-bold text-red-500 mb-6" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
            Admin Dashboard
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Manage Posts -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-bold text-blue-500 mb-4" style="text-shadow: 0 0 10px rgba(0, 0, 255, 0.8);">
                    Manage Posts
                </h2>
                <p class="text-gray-300 mb-4">
                    Create, edit, or delete posts.
                </p>
                <a href="{{ url($language . '/admin/posts') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-lg font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Go to Posts
                </a>
            </div>

            <!-- Manage Mail -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-bold text-green-500 mb-4" style="text-shadow: 0 0 10px rgba(0, 255, 0, 0.8);">
                    Manage Mail
                </h2>
                <p class="text-gray-300 mb-4">
                    View messages.
                </p>
                <a href="{{ url($language . '/admin/messages') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-lg font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Go to Mail
                </a>
            </div>

            <!-- Logout -->
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-bold text-red-500 mb-4" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
                    Logout
                </h2>
                <p class="text-gray-300 mb-4">
                    Log out of the admin dashboard.
                </p>
                <form action="{{ url($language . '/admin/logout') }}" method="GET">
                    @csrf
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-lg font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection