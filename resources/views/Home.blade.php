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

    <!-- Hero -->
    <section
        class="position-relative bg-laravel text-white text-center d-flex flex-column justify-content-center align-items-center mb-4"
        style="height: 72vh;">
        <div class="position-absolute w-100 h-100 bg-overlay"></div>
        <div class="position-relative">
            <h1 class="display-1 fw-bold text-uppercase">
                Career<span class="text-dark">Hub</span>
            </h1>
<<<<<<< main
            <p class="display-6 fw-bold my-4">Find or post any kind of jobs & projects</p>
            <a href="/register" class="btn btn-outline-light rounded-pill text-uppercase mt-2">Sign Up to List
                a job</a>
=======
            <p class="display-6 fw-bold my-4">Find or post Any Kind of jobs & projects</p>

            @auth
            <a href={{route('list-job')}} class="btn btn-outline-light rounded-pill text-uppercase mt-2">List a Sra
            </a>
            @else
            <a href="/register" class="btn btn-outline-light rounded-pill text-uppercase mt-2">Sign Up to List
                Sra</a>
            @endauth
>>>>>>> main
        </div>
    </section>

    <main class="container">

        @include('components.search')
        <div class="row g-4">
            @foreach ($listing as $listed)
            {{-- Create One Card for each Listing --}}
            <x-ListingCard :listed="$listed" />
            @endforeach

        </div>
    </main>


    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script> --}}


    @endsection