@extends('layouts.layout')
@section('head')
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

@endsection


@section('content')
    <h1>Home</h1>
    <div class="flex flex-wrap -m-4">
        @foreach ($posts as $post)
            <a href="#" class="card">
                <img class="card-image" src="/images/crepe.jpg" alt="">
                <div class="card-content">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection





