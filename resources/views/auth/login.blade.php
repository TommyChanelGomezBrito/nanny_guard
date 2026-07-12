@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="auth-panel">
    <div class="auth-card">
        <div class="auth-card-header">
            <h1>Welcome back</h1>
            <p class="text-secondary">Sign in to manage families, sitters and schedules.</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="auth-form">
            @csrf

            <label for="email">Email address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror

            <label for="password">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember me</label>
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">Login</button>

            @if (Route::has('password.request'))
                <div class="text-center">
                    <a href="{{ route('password.request') }}" class="text-secondary">Forgot your password?</a>
                </div>
            @endif
        </form>

        <p class="auth-note">New here? <a href="{{ route('register') }}">Create an account</a>.</p>
    </div>
</div>
@endsection
