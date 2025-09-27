<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ url('/') }}"><span class="fw-bolder text-primary">Person</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('resumes.index') }}">Resume</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projects.index') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                @auth
                    {{-- @if (auth()->user()->is_admin) --}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('resumes.create') }}">Create Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projects.create') }}">Create Projects</a>
                    </li>
                    {{-- @endif --}}
                    {{-- Logout option --}}
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link p-0 m-0 align-baseline">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
