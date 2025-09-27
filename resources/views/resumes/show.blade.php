@extends('layouts.app')

@section('content')
<div class="container px-5 my-5">
    <h1 class="text-primary fw-bolder mb-4">{{ $resume->type=='experience' ? $resume->job_title : $resume->degree }}</h1>

    <div class="mb-2"><strong>Company / Field:</strong> {{ $resume->type=='experience' ? $resume->company : $resume->field_of_study }}</div>
    <div class="mb-2"><strong>Location:</strong> {{ $resume->location }}</div>
    <div class="mb-2"><strong>Start Date:</strong> {{ $resume->start_date }}</div>
    <div class="mb-2"><strong>End Date:</strong> {{ $resume->end_date ?? 'Present' }}</div>
    <div class="mb-2"><strong>Description:</strong> {{ $resume->description }}</div>

    <div class="mt-4">
        <a href="{{ route('resumes.edit', $resume) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('resumes.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>


    <div class="resume-container">
        {{-- Header --}}
        <div class="header">
            <h1>{{ strtoupper($user->name) }}</h1>
            <p>{{ strtoupper($user->job_title ?? 'PROFESSIONAL') }}</p>
        </div>

        {{-- Contact --}}
        <div class="contact-info">
            <p><i class="fas fa-phone icon"></i> {{ $user->phone }}</p>
            <p><i class="fas fa-envelope icon"></i> {{ $user->email }}</p>
            <p><i class="fas fa-map-marker-alt icon"></i> {{ $user->location }}</p>
            <p><i class="fas fa-globe icon"></i> {{ $user->website ?? 'N/A' }}</p>
        </div>

        {{-- Profile Summary (maybe from UserResource Trait) --}}
        <div class="section profile-summary">
            <h2 class="section-title">PROFILE SUMMARY</h2>
            <p>{{ $user->profile_summary ?? 'A passionate professional looking for opportunities to grow.' }}</p>
        </div>

        {{-- Work Experience --}}
        <div class="section work-experience">
            <h2 class="section-title">WORK EXPERIENCE</h2>
            @foreach($user->resumes->where('type', 'experience') as $exp)
                <div class="timeline-item">
                    <div class="job-title-wrapper">
                        <h3>{{ $exp->company }}</h3>
                        <h4>{{ $exp->job_title }}</h4>
                    </div>
                    <span class="job-date">
                        {{ $exp->start_date->format('Y') }} -
                        {{ $exp->end_date ? $exp->end_date->format('Y') : 'PRESENT' }}
                    </span>
                    <ul>
                        <li>{{ $exp->description }}</li>
                    </ul>
                </div>
            @endforeach
        </div>

        {{-- Education --}}
        <div class="section education">
            <h2 class="section-title">EDUCATION</h2>
            @foreach($user->resumes->where('type', 'education') as $edu)
                <div class="timeline-item">
                    <h3>{{ $edu->start_date->format('Y') }} - {{ $edu->end_date ? $edu->end_date->format('Y') : 'Present' }}</h3>
                    <h4>{{ $edu->company }}</h4>
                    <p>{{ $edu->degree }} in {{ $edu->field_of_study }}</p>
                </div>
            @endforeach
        </div>

        {{-- Projects --}}
        <div class="section projects">
            <h2 class="section-title">PROJECTS</h2>
            @foreach($user->projects as $project)
                <div class="timeline-item">
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    <span class="job-date">
                        {{ $project->start_date->format('Y') }}
                        @if($project->end_date) - {{ $project->end_date->format('Y') }} @endif
                        ({{ ucfirst($project->status) }})
                    </span>
                </div>
            @endforeach
        </div>

        {{-- Skills (could be from a trait or user profile JSON) --}}
        <div class="section skills-list">
            <h2 class="section-title">SKILLS</h2>
            <ul>
                @foreach($user->skills ?? ['Teamwork','Leadership','Critical Thinking'] as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>
        </div>

        {{-- Languages (from trait or static fallback) --}}
        <div class="section languages-list">
            <h2 class="section-title">LANGUAGES</h2>
            <ul>
                @foreach($user->languages ?? ['English: Fluent','French: Fluent'] as $lang)
                    <li>{{ $lang }}</li>
                @endforeach
            </ul>
        </div>
    </div>


@endsection
