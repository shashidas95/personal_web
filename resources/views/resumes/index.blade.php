@extends('layouts.app')

@section('content')
    <div class="container px-5 my-5">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1 class="text-primary fw-bolder">Resumes</h1>
            <a class="btn btn-outline-dark btn-sm" href="{{ route('resumes.download') }}">
                <i class="bi bi-download"></i> Download Resume
            </a>
            <a class="btn btn-outline-primary btn-sm" href="{{ route('resumes.preview') }}">
                <i class="bi bi-eye"></i> Preview Resume
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Experience Section --}}
        <section class="mb-5">
            <h2 class="text-primary fw-bolder mb-3">Experience</h2>
            @foreach ($resumes->where('type', 'experience') as $resume)
                <div class="card shadow border-0 rounded-4 mb-4">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-3 text-center text-lg-start mb-3 mb-lg-0">
                                <div class="bg-light p-3 rounded-4">
                                    <div class="fw-bolder text-primary mb-1">
                                        {{ $resume->formatted_start_date }} - {{ $resume->formatted_end_date }}
                                    </div>
                                    <div class="small fw-bolder">{{ $resume->job_title }}</div>
                                    <div class="small text-muted">{{ $resume->company }}</div>
                                    <div class="small text-muted">{{ $resume->location }}</div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div>{{ $resume->description }}</div>
                            </div>
                            @auth
                                <div class="col-lg-2 text-end">
                                    <a href="{{ route('resumes.edit', $resume) }}" class="btn btn-sm btn-warning mb-2">Edit</a>
                                    <form action="{{ route('resumes.destroy', $resume) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </section>

        {{-- Education Section --}}
        <section>
            <h2 class="text-primary fw-bolder mb-3">Education</h2>
            @foreach ($resumes->where('type', 'education') as $resume)
                <div class="card shadow border-0 rounded-4 mb-4">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-3 text-center text-lg-start mb-3 mb-lg-0">
                                <div class="bg-light p-3 rounded-4">
                                    <div class="fw-bolder text-primary mb-1">
                                        {{ $resume->formatted_start_date }} - {{ $resume->formatted_end_date }}
                                    </div>
                                    <div class="small fw-bolder">{{ $resume->degree }}</div>
                                    <div class="small text-muted">{{ $resume->field_of_study }}</div>
                                    <div class="small text-muted">{{ $resume->location }}</div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div>{{ $resume->description }}</div>
                            </div>
                            @auth
                                <div class="col-lg-2 text-end">
                                    <a href="{{ route('resumes.edit', $resume) }}" class="btn btn-sm btn-warning mb-2">Edit</a>
                                    <form action="{{ route('resumes.destroy', $resume) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
