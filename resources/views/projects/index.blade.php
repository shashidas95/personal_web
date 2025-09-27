@extends('layouts.app')

@section('content')
    <div class="container px-5 my-5">

        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1 class="text-primary fw-bolder">Projects</h1>
            @auth
                <a href="{{ route('projects.create') }}" class="btn btn-outline-primary btn-sm">+ Add Project</a>
            @endauth
        </div>


        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @foreach ($projects as $project)
            <div class="card shadow border-0 rounded-4 mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-3 text-center text-lg-start mb-3 mb-lg-0">
                            <div class="bg-light p-3 rounded-4 text-center">

                                @if ($project->image_path)
                                    <img src="{{ asset('storage/' . $project->image_path) }}" alt="Project Image"
                                        class="img-fluid mt-2 rounded" style="max-height: 150px;">
                                @endif
                                <div class="small text-center fw-bolder">{{ $project->title }}</div>
                                <div class="fw-bolder text-success mb-1"> {{ $project->formatted_start_date }} -
                                    {{ $project->formatted_end_date ?? 'Present' }}

                                </div>
                                <div class="small text-muted">{{ ucfirst($project->status) }}</div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="text-justify">{{ $project->description }}</div>

                        </div>
                        @auth
                            <div class="col-lg-2 text-end">
                                <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-warning mb-2">Edit</a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
