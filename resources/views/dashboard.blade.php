@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row mb-4">
    <div class="col-md-8">
        <h1 class="fw-bold">Welcome back, {{ Auth::user()->name }}</h1>
        <p class="text-secondary">Quick overview of your nanny management setup.</p>
    </div>
    <div class="col-md-4 text-md-end">
        <a class="btn btn-outline-primary" href="{{ route('families') }}">View families</a>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h2 class="h5">Active bookings</h2>
                <p class="display-6 mb-0">8</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h2 class="h5">Registered families</h2>
                <p class="display-6 mb-0">5</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h2 class="h5">Babysitters</h2>
                <p class="display-6 mb-0">12</p>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-6">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h3 class="h6">Upcoming shifts</h3>
                <ul class="list-group list-group-flush mt-3">
                    <li class="list-group-item">Emma — Monday, 9:00 AM · Johnson family</li>
                    <li class="list-group-item">Carlos — Tuesday, 2:00 PM · Rossi family</li>
                    <li class="list-group-item">Sofia — Thursday, 5:30 PM · Bianchi family</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h3 class="h6">Recent notes</h3>
                <ul class="list-group list-group-flush mt-3">
                    <li class="list-group-item">New sitter profile added for Maria.</li>
                    <li class="list-group-item">Reminder: confirm Saturday evening availability.</li>
                    <li class="list-group-item">Fresh family onboarding scheduled for Friday.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
