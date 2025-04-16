@extends('layout')

@section('content')
<div class="rounded-lg p-8" style="height: calc(100vh - 160px); margin-top: 0; box-shadow: 10px 0 8px -8px rgba(255, 0, 0, 0.8), -10px 0 8px -8px rgba(255, 0, 0, 0.8);">
    <h1 class="text-5xl font-bold text-red-500 mb-6" style="text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);">
        Messages
    </h1>

    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr class="bg-gray-700 text-gray-300">
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Message</th>
                    <th class="px-4 py-2 text-left">Date</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages->sortByDesc('created_at') as $message)
                    <tr class="border-t border-gray-700 hover:bg-gray-700 transition-colors duration-200">
                        <td class="px-4 py-2 text-gray-300">{{ $message->name }}</td>
                        <td class="px-4 py-2 text-gray-300">{{ $message->email }}</td>
                        <td class="px-4 py-2 text-gray-300">{{ Str::limit($message->message, 50) }}</td>
                        <td class="px-4 py-2 text-gray-300">{{ $message->created_at->format('Y-m-d H:i') }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('admin.messages.show', ['language' => $language, 'message' => $message->id]) }}" class="text-blue-500 hover:underline">
                                View
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection