@extends('layouts.layout')

@section('content')
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('post.update', $post->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="poster">Poster:</label>
            <input type="text" id="poster" name="poster" value="{{ $post->poster }}">
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content">{{ $post->content }}</textarea>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
