@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="py-5 text-center">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <p class="text-uppercase text-primary fw-semibold small">Manage families, sitters and schedules</p>
            <h1 class="display-5 fw-bold">Secure nanny management for busy families.</h1>
            <p class="lead text-secondary">Track caregivers, assign shifts, and organize child care with a simple Laravel dashboard built for trusted home support.</p>
            <div class="d-flex justify-content-center gap-3 mt-4">
                <a class="btn btn-primary btn-lg" href="{{ route('register') }}">Create account</a>
                <a class="btn btn-outline-secondary btn-lg" href="{{ route('login') }}">Log in</a>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h3 class="h5">Family profiles</h3>
                <p class="text-secondary">Save child details, guardian contacts, and household preferences for every family.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h3 class="h5">Booking timeline</h3>
                <p class="text-secondary">Assign sitters and review upcoming sessions with a clear weekly schedule.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h3 class="h5">Care history</h3>
                <p class="text-secondary">Keep a log of completed visits, notes, and messages between families and caregivers.</p>
            </div>
        </div>
    </div>
</div>
@endsection
