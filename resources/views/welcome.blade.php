@extends('layouts.app')

@section('content')
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                {{-- Left Side: Text & Buttons --}}
                <div class="col-xl-5">
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                            <div class="text-uppercase">Design &middot; Development &middot; Marketing</div>
                        </div>
                        <h1 class="display-3 fw-bolder mb-5">
                            <span class="text-gradient d-inline">Get started with Bootstrap</span>
                        </h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <a class="btn btn-primary btn-lg px-5 py-3 fs-6 fw-bolder"
                                href="{{ route('resumes.index') }}">Resume</a>
                            <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                                href="{{ route('projects.index') }}">Projects</a>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Image or Video --}}
                <div class="col-xl-7 text-center">
                    {{-- Option 1: Image --}}
                    <img src="{{ asset('storage/' . 'images/business-people-icon.jpg') }}" alt="Business Image"
                        class="img-fluid rounded" />

                    {{-- Option 2: Video (uncomment if needed) --}}
                    {{--
                <video class="img-fluid rounded" autoplay muted loop>
                    <source src="{{ asset('videos/business-video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                --}}
                </div>
            </div>
        </div>
    </header>
@endsection
