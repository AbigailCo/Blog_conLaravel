@extends('layouts.layout')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Edit Post</h1>
    <form method="POST" action="{{ route('post.update', $post->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
            <input type="text" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="title" name="title" value="{{ $post->title }}" maxlength="255" required>
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-bold mb-2">Content:</label>
            <textarea class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">Save</button>
    </form>
</div>
@endsection
