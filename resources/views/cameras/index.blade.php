@extends('layouts.app')

@section('title', 'Cameras')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3">Cameras</h1>
            <p class="text-secondary mb-0">Manage your camera feeds and devices.</p>
        </div>
        <a class="btn btn-primary" href="{{ route('cameras.create') }}">Add Camera</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Stream URL</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($cameras as $camera)
                    <tr>
                        <td>{{ $camera->name }}</td>
                        <td>{{ $camera->location }}</td>
                        <td>{{ $camera->active ? 'Active' : 'Inactive' }}</td>
                        <td>{{ $camera->stream_url ?? '—' }}</td>
                        <td class="text-end">
                            <a class="btn btn-sm btn-outline-primary" href="{{ route('cameras.show', $camera) }}">View</a>
                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('cameras.edit', $camera) }}">Edit</a>
                            <form action="{{ route('cameras.destroy', $camera) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this camera?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No cameras configured yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
