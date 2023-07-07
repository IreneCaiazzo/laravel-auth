@extends('admin.layouts.base')

@section('contents')

    <h1>Add new post</h1>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form method="POST" action="{{ route('admin.projects.store', ['project' => $project]) }}" novalidate>
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                name="title"
                value="{{ old('title'), $project->title }}"
                >
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input
                type="text"
                class="form-control @error('description') is-invalid @enderror"
                id="description"
                name="description"
                value="{{ old('description'), $project->description }}"
            >
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="repo" class="form-label">Repo</label>
            <textarea
                class="form-control @error('repo') is-invalid @enderror"
                id="repo"
                rows="3"
                name="repo">{{ old('repo') }}</textarea>
            @error('repo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary">Save</button>
    </form>

@endsection