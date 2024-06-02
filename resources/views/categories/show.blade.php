@extends('layouts.layout')

@section('content')
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-700">Poster: {{ $post->poster }}</p>
        <p class="text-gray-700">Content: {{ $post->content }}</p>
        <p class="text-gray-700">Habilitated: {{ $post->habilitated ? 'Yes' : 'No' }}</p>
        <a href="{{ route('categories.edit', $post->id) }}" class="text-blue-600 hover:underline">Edit</a>
    </div>

    @if (session('success'))
        <div class="bg-green-200 text-green-800 px-4 py-2 rounded-lg mt-4">
            {{ session('success') }}
        </div>
    @endif
@endsection
