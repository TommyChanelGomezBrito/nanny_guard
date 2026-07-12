@extends('layouts.app')

@section('title', 'Camera Details')

@section('content')
<div class="container">
    <div class="mb-4">
        <a class="btn btn-secondary" href="{{ route('cameras.index') }}">Back to cameras</a>
    </div>

    <div class="row gy-4">
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="h4">{{ $camera->name }}</h1>
                    <p class="text-secondary mb-3">{{ $camera->location ?? 'Location not set' }}</p>
                    <p>{{ $camera->description ?? 'No description available.' }}</p>
                    <dl class="row mt-4">
                        <dt class="col-sm-4">Status</dt>
                        <dd class="col-sm-8">{{ $camera->active ? 'Active' : 'Inactive' }}</dd>

                        <dt class="col-sm-4">Stream URL</dt>
                        <dd class="col-sm-8">{{ $camera->stream_url ?? 'Not configured' }}</dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="h5">Live view</h2>
                    @if($camera->stream_url)
                        <div class="ratio ratio-16x9 bg-dark">
                            <iframe src="{{ $camera->stream_url }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    @else
                        <div class="alert alert-warning">
                            No stream URL configured. Add a valid camera feed URL to see live video.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
