@extends('layouts.app')

@section('content')
    <div class="container px-5 my-5">
        <div class="text-center">
            <h1 class="display-5 fw-bolder mb-3">Thank You!</h1>
            <p class="lead fw-normal text-muted mb-5">Your message has been received. We'll get back to you shortly.</p>
            <div class="card shadow rounded-4 p-4">
                <h2 class="fw-bolder mb-3">Submitted Information</h2>
                <ul class="list-group list-group-flush text-start">
                    <li class="list-group-item"><strong>Name:</strong> {{ $name }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ $email }}</li>
                    <li class="list-group-item"><strong>Phone:</strong> {{ $phone }}</li>
                    <li class="list-group-item"><strong>Message:</strong> {{ $message }}</li>
                </ul>
            </div>
            <a class="btn btn-primary btn-lg px-5 mt-5" href="{{ url('/') }}">Go Back to Home</a>
        </div>
    </div>
@endsection
