<!-- resources/views/job-applications/index.blade.php -->

@extends('components.header')

@section('content')

<body class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href={{route('home')}}>
                <img class="w-25" src="{{ asset('images/laravelbig.ico') }}" alt="logo" />
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link hover-text-laravel" href={{route('logout')}}>
                            <i class="fa-solid fa-arrow-right-to-bracket"></i> Logout
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link hover-text-laravel" href={{ route('register') }}>
                            <i class="fa-solid fa-user-plus"></i> Register
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-text-laravel" href={{route('login')}}>
                            <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                        </a>
                    </li>

                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <x-flashMessage />

    <main class="container">
        <h1 class="mb-4">Job Applications</h1>
        <div class="row g-4">
            @foreach ($applications as $application)
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/work.png') }}" class="img-fluid rounded-start d-none d-md-block"
                                alt={{$company->name}} />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">
                                    {{ $application->name}}
                                </h3>
                                <h5 class="card-subtitle mb-2 text-muted">Application position: {{ $jobListing->title }}
                                </h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{
                                    $jobListing->location }}</p>
                                <p class="card-text"><i class="fa-solid fa-user"></i> {{ $application->email }}</p>

                                {{-- this will be implemented when the description page is implemented --}}
                                {{-- <p class="card-text"><strong>Cover Letter:</strong> {{ $application->cover_letter
                                    }}</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    @endsection