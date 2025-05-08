<!-- resources/views/auth/register.blade.php -->
@extends('layout')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <form method="POST" action="{{ route('register') }}" class="p-4 rounded shadow-lg bg-white" style="width: 400px;">
        @csrf
        <h3 class="text-center mb-4">Register</h3>
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
        <button type="submit" class="btn btn-primary w-100 shadow">Register</button>
    </form>
</div>
@endsection
