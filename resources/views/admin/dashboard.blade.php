@extends('layout')

@section('content')
<div>
    <!-- Send to Posts -->
    <div>
        <a href="{{ url($language . '/admin/posts') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Manage Posts
        </a>
    </div>
    <br>    

    <!-- Send to Mail -->
    <div>
        <a href="{{ url($language . '/admin/messages') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            Manage Mail
        </a>
    </div>
    <br>

    <!-- Logout -->
    <div>
        <form action="{{ url($language . '/admin/logout') }}" method="GET">
            @csrf
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection