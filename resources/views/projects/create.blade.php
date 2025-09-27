@extends('layouts.app')

@section('content')
<div class="container px-5 my-5">
    <h1 class="text-primary fw-bolder mb-4">Add New Project</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Start Date</label>
                <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}" required>
            </div>
            <div class="col">
                <label class="form-label">End Date</label>
                <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control" required>
                <option value="planned" {{ old('status')=='planned' ? 'selected' : '' }}>Planned</option>
                <option value="ongoing" {{ old('status')=='ongoing' ? 'selected' : '' }}>Ongoing</option>
                <option value="completed" {{ old('status')=='completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create Project</button>
    </form>
</div>
@endsection
