@extends('layouts.layout')

@section('content')
    <h1>Posts</h1>

    <form action="{{ route('posts.search') }}" method="GET">
        <div class="form-group">
            <input type="text" name="query" class="form-control" placeholder="Buscar posts...">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <ul>
        @if(isset($posts) && $posts->count())
            @foreach($posts as $post)
                <li>{{ $post->title }} by {{ $post->poster }}
                    <a href="{{ route('post.edit', $post->id) }}">Edit</a>
                    <a href="{{ route('post.show', $post->id) }}">Show</a>
                </li>
            @endforeach
        @else
            <p>No se encontraron posts.</p>
        @endif
    </ul>
@endsection
