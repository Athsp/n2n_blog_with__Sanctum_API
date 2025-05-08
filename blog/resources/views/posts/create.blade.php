<!-- resources/views/posts/create.blade.php -->
@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Create a New Post</h2>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control border border-3 rounded-pill shadow-sm">
            </div>
            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" class="form-control border border-3 rounded shadow-sm" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-success w-100 rounded-pill shadow">Create</button>
        </form>
    </div>
</div>
@endsection
