<!-- resources/views/posts/index.blade.php -->
@extends('layout')

@section('content')
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3 shadow-lg">Create New Post</a>

@foreach ($posts as $post)
    <div class="card mb-3 shadow-lg border-0" style="border-radius: 15px;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning shadow">Edit</a>
        </div>
    </div>
@endforeach
@endsection
