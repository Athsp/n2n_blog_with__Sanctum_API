<!-- resources/views/auth/register.blade.php -->
@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4 rounded-3">
        <h2 class="text-center mb-4">Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control shadow-sm" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control shadow-sm" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control shadow-sm" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 shadow-sm">Register</button>
        </form>
    </div>
</div>
@endsection
