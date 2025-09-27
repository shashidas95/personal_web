@extends('layouts.app')

@section('content')
<div class="container px-5 my-5">
    <h1 class="text-primary fw-bolder mb-4">{{ $project->title }}</h1>
    <div class="mb-3">
        <strong>Status:</strong> {{ ucfirst($project->status) }}
    </div>
    <div class="mb-3">
        <strong>Start Date:</strong> {{ $project->start_date }}
    </div>
    <div class="mb-3">
        <strong>End Date:</strong> {{ $project->end_date ?? 'Present' }}
    </div>
    <div class="mb-3">
        <strong>Description:</strong> {{ $project->description }}
    </div>
    @if($project->image_path)
        <img src="{{ asset('storage/' . $project->image_path) }}" alt="Project Image" class="img-fluid mt-2 rounded" style="max-height: 300px;">
    @endif
    <div class="mt-4">
        <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
