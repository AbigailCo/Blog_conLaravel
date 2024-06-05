@extends('layouts.layout')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>
    <p class="text-gray-700 mb-4">{{ $post->content }}</p>
    <p class="text-gray-600">Posted by <span class="font-bold">{{ $post->poster }}</span></p>
</div>
@endsection
