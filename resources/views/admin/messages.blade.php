@extends('layout')

@section('content')
<div class="container mx-auto mt-8 px-4">
    <h1 class="text-2xl font-bold mb-4">Saved Messages</h1>
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Message</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Date</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $message->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $message->email }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ Str::limit($message->message, 50) }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $message->created_at->format('Y-m-d H:i') }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('admin.messages.show', ['language' => $language, 'message' => $message->id]) }}" class="text-indigo-600 hover:underline">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection