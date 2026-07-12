@extends('layouts.app')

@section('title', 'Sign up')

@section('content')
<div class="auth-panel">
    <div class="auth-card">
        <div class="auth-card-header">
            <h1>Create your account</h1>
            <p class="text-secondary">Start managing nanny schedules and family profiles.</p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="auth-form">
            @csrf

            <label for="name">Full name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" required autofocus>

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required>

            <label for="password">Password</label>
            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
            @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror

            <label for="password_confirmation">Confirm password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>

            <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">Create account</button>
        </form>

        <p class="auth-note">Already registered? <a href="{{ route('login') }}">Log in</a>.</p>
    </div>
</div>
@endsection
