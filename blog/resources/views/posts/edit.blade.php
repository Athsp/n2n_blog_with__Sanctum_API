<!-- resources/views/posts/edit.blade.php -->
@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Edit Post</h2>
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control form-control-lg shadow-sm">
            </div>
            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" class="form-control form-control-lg shadow-sm" rows="5">{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning btn-lg shadow-sm w-100">Update</button>
        </form>
    </div>
</div>
@endsection
