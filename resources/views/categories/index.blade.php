@extends('layouts.layout')

@section('content')
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-3xl font-bold mb-4">Posts</h1>
        @if ($posts->isEmpty())
            <p class="text-gray-700">No posts found.</p>
        @else
            <ul>
                @foreach ($posts as $post)
                    <li class="mb-4">
                        <a href="{{ route('categories.show', $post->id) }}" class="text-blue-600 hover:underline">{{ $post->title }}</a>
                        <p class="text-gray-700">Poster: {{ $post->poster }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
