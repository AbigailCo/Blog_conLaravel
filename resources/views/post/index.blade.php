@extends('layouts.layout')

@section('content')
    <h1>Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }} by {{ $post->poster }}
                <a href="{{ route('post.edit', $post->id) }}">Edit</a>
                <a href="{{ route('post.show', $post->id) }}">Show</a>
            </li>
        @endforeach
    </ul>
@endsection

