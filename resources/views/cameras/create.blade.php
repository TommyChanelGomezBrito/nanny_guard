@extends('layouts.app')

@section('title', 'Add Camera')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="h4 mb-3">Add Camera</h1>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('cameras.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="location">Location</label>
                            <input class="form-control" type="text" id="location" name="location" value="{{ old('location') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="stream_url">Stream URL</label>
                            <input class="form-control" type="url" id="stream_url" name="stream_url" value="{{ old('stream_url') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="active" name="active" value="1" {{ old('active', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="active">Active</label>
                        </div>

                        <button class="btn btn-primary" type="submit">Save camera</button>
                        <a class="btn btn-secondary ms-2" href="{{ route('cameras.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
