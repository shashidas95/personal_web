@extends('layouts.app')

@section('content')
    <div class="container">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <div class="resume-container px-5 my-5">
            {{-- Header --}}
            <div class="header text-center mb-4">
                @if ($user->profile_image)
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-circle mb-3"
                        width="120" height="120">
                @endif
                <h1>{{ strtoupper($user->name) }}</h1>
                <p>{{ strtoupper($user->job_title ?? 'DevOps Engineer | Cloud & Automation | Kubernetes | CI/CD') }}</p>
            </div>

            {{-- Contact Info --}}
            <div class="contact-info text-center mb-4">
                <p><i class="fas fa-phone"></i> {{ $user->phone ?? 'N/A' }}</p>
                <p><i class="fas fa-envelope"></i> {{ $user->email }}</p>
                <p><i class="fas fa-map-marker-alt"></i> {{ $user->address ?? 'N/A' }}</p>
                <p><i class="fas fa-globe"></i> {{ $user->website ?? 'www.example.com' }}</p>
            </div>

            {{-- Profile Summary --}}
            @if ($user->profile_summary)
                <div class="section profile-summary mb-4">
                    <h2>Profile Summary</h2>
                    <p>{{ $user->profile_summary }}</p>
                </div>
            @endif

            {{-- Experience --}}
            <div class="section work-experience mb-4">
                <h2>Work Experience</h2>
                @foreach ($user->resumes->where('type', 'experience') as $exp)
                    <div class="timeline-item mb-3">
                        <div class="job-title-wrapper">
                            <h3>{{ $exp->company }}</h3>
                            <h4>{{ $exp->job_title }}</h4>
                        </div>
                        <span class="job-date">
                            {{ $exp->formatted_start_date }} - {{ $exp->formatted_end_date }}
                        </span>
                        <ul>
                            <li>{{ $exp->description }}</li>
                        </ul>
                    </div>
                @endforeach
            </div>

            {{-- Education --}}
            <div class="section education mb-4">
                <h2>Education</h2>
                @foreach ($user->resumes->where('type', 'education') as $edu)
                    <div class="timeline-item mb-3">
                        <h3> {{ $edu->formatted_start_date }} - {{ $edu->formatted_end_date }}/h3>
                            <h4>{{ $edu->degree }} - {{ $edu->field_of_study }}</h4>
                            <p>{{ $edu->description }}</p>
                    </div>
                @endforeach
            </div>

            {{-- Projects --}}
            <div class="section projects mb-4">
                <h2>Projects</h2>
                @foreach ($user->projects as $project)
                    <div class="timeline-item mb-3">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ $project->description }}</p>
                        <span class="job-date">
                            {{ $project->formatted_start_date }} - {{ $project->formatted_end_date }}
                            ({{ ucfirst($project->status) }})
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
