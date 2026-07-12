@extends('layouts.app')

@section('title', 'Sign up')

@section('content')
<div class="auth-panel">
    <div class="auth-card">
        <h1>Create your account</h1>
        <p>Start managing nanny schedules and family profiles.</p>

        @if($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="auth-form">
            @csrf

            <label for="name">Full name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>

            <label for="password_confirmation">Confirm password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>

            <button type="submit" class="button button-primary">Create account</button>
        </form>

        <p class="auth-note">Already registered? <a href="{{ route('login') }}">Log in</a>.</p>
    </div>
</div>
@endsection
