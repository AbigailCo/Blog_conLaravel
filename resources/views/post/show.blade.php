@extends('layouts.layout')

@section('content')
<style>
    .break-words {
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .break-all {
        word-break: break-all;
    }
</style>
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-4 break-words">{{ $post->title }}</h1>
    <p class="text-gray-700 mb-4 break-words">{{ $post->content }}</p>
    <p class="text-gray-600 break-words">Posted by <span class="font-bold">{{ $post->poster }}</span></p>
    @auth
            @if (auth()->user()->username == $post->poster)
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete Post</button>
            </form>
            @endif
        @endauth
</div>
@endsection
