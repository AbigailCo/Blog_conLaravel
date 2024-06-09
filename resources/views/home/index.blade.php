@extends('layouts.layout')

@section('head')
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
@endsection

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white rounded">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Posts</h1>

    <form action="{{ route('posts.search') }}" method="GET" class="mb-6">
        <div class="flex">
            <input type="text" name="query" class="w-full p-2 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Buscar posts...">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-r hover:bg-blue-700 transition">Buscar</button>
        </div>
    </form>
    </div>

    <div class="flex flex-wrap -m-4">
        @foreach ($posts as $post)

        <a href="{{ route('post.show', ['id' => $post->id, 'from' => 'home']) }}" class="card">
        @if($post->image_path)
    <div class="mb-4">
        <img src="{{ asset($post->image_path) }}" alt="{{ $post->title }}" class="w-64 h-auto rounded">
    </div>
@endif
                <div class="card-content">
                    <h5 class="card-title truncate overflow-hidden overflow-ellipsis">{{ Str::limit($post->title, 25) }}</h5>
                    <p class="card-text truncate overflow-hidden overflow-ellipsis">Autor: {{ Str::limit($post->poster, 100) }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
