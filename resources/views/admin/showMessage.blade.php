@extends('layout')

@section('content')
<div class="rounded-lg p-8" style="height: calc(100vh - 160px); margin-top: 0; box-shadow: 10px 0 8px -8px rgba(255, 0, 0, 0.8), -10px 0 8px -8px rgba(255, 0, 0, 0.8);">
    <h1 class="text-5xl font-bold text-red-500 mb-6" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
        Message Details
    </h1>

    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <p class="text-gray-300 mb-4">
            <strong class="text-red-500">Received:</strong> {{ $message->created_at->format('Y-m-d H:i') }}
        </p>
        <p class="text-gray-300 mb-4">
            <strong class="text-red-500">Name:</strong> {{ $message->name }}
        </p>
        <p class="text-gray-300 mb-4">
            <strong class="text-red-500">Email:</strong> {{ $message->email }}
        </p>
        <p class="text-gray-300 mb-4">
            <strong class="text-red-500">Message:</strong>
        </p>
        <p class="text-gray-300 bg-gray-700 p-4 rounded-lg">
            {{ $message->message }}
        </p>
    </div>

    <div class="mt-6 flex justify-between">
        <a href="{{ route('admin.messages', ['language' => $language]) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-lg font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Back to Messages
        </a>
    </div>
</div>
@endsection