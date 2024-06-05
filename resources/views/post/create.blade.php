
@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Create a Post</h1>
    <form method="POST" action="{{ route('post.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3" required>{{ old('content') }}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="poster">Author</label>
            <input type="text" class="form-control" id="poster" name="poster" value="{{ old('poster') }}" required>
            @error('poster')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
