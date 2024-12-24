@extends('layouts.app')

@section('content')
    <h1>Login</h1>

    @if (session('error'))
        <div class="alert alert-danger" style="color: red; background-color: #ffe6e6; padding: 10px; border: 1px solid red; border-radius: 5px;">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button class="btn btn-primary">Login</button>
    </form>
@endsection
