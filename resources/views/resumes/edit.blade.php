@extends('layouts.app')

@section('content')
    <div class="container px-5 my-5">
        <h1 class="text-primary fw-bolder mb-4">Edit Resume</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('resumes.update', $resume) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Type</label>
                <select name="type" class="form-control" required>
                    <option value="experience" {{ old('type', $resume->type) == 'experience' ? 'selected' : '' }}>Experience
                    </option>
                    <option value="education" {{ old('type', $resume->type) == 'education' ? 'selected' : '' }}>Education
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Job Title / Degree</label>
                <input type="text" name="job_title" class="form-control"
                    value="{{ old('job_title', $resume->job_title) }}">
                <input type="text" name="degree" class="form-control mt-2" value="{{ old('degree', $resume->degree) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Company / Field of Study</label>
                <input type="text" name="company" class="form-control" value="{{ old('company', $resume->company) }}">
                <input type="text" name="field_of_study" class="form-control mt-2"
                    value="{{ old('field_of_study', $resume->field_of_study) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" value="{{ old('location', $resume->location) }}">
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Start Date</label>
                    <input type="date" name="start_date" class="form-control"
                        value="{{ old('start_date', $resume->start_date?->format('Y-m-d')) }}" required>
                </div>
                <div class="col">
                    <label class="form-label">End Date</label>
                    <input type="date" name="end_date" class="form-control"
                        value="{{ old('start_date', $resume->end_date?->format('Y-m-d')) }}">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ old('description', $resume->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Resume</button>
        </form>
    </div>
@endsection
