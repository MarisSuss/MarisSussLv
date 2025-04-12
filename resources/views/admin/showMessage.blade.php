@extends('layout')

@section('content')
<div class="container mx-auto mt-8 px-4">
    <h1 class="text-2xl font-bold mb-4">Message Details</h1>
    <div class="bg-white p-6 rounded-lg shadow-lg">
         <p class="mt-4 text-sm text-gray-500"><strong>Received</strong> {{ $message->created_at->format('Y-m-d H:i') }}</p>
        <p><strong>Name:</strong> {{ $message->name }}</p>
        <p><strong>Email:</strong> {{ $message->email }}</p>
        <p><strong>Message:</strong></p>
        <p class="mt-2 text-gray-700">{{ $message->message }}</p>
    </div>
    <div class="mt-4">
        <a href="{{ route('admin.messages', ['language' => $language]) }}" class="text-indigo-600 hover:underline">Back to Messages</a>
    </div>
</div>
@endsection