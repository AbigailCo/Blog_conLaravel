@extends('layouts.layout')

@section('content')
    <h1>Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }} by {{ $post->poster }}
                <a href="{{ route('category.edit', $post->id) }}">Edit</a>
                <a href="{{ route('category.show', $post->id) }}">Show</a>
            </li>
        @endforeach
    </ul>
@endsection

