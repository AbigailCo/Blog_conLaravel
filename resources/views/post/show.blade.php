@extends('layouts.layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>Posted by {{ $post->poster }}</p>
@endsection
