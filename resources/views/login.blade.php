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
                    <li class="nav-item">
                        <a href={{route('register')}} class="nav-link hover:text-laravel"><i
                                class="fa-solid fa-user-plus"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a href={{route('login')}} class="nav-link hover:text-laravel"><i
                                class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="bg-light border border-2 p-4 rounded mx-auto mt-5" style="max-width: 30rem;">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-3">
                        Log In
                    </h2>
                    <p class="mb-4">Log in to post gigs</p>
                </header>

                <form action={{route('authenticate')}} method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" />
                        @error('email')
                        <p class="text-danger small mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" />
                        @error('password')
                        <p class="text-danger small mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn bg-laravel text-white w-100 hover:bg-black">
                            Sign In
                        </button>
                    </div>

                    <div class="mt-4">
                        <p>
                            Don't have an account?
                            <a href="/register" class="text-laravel">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybBogGz6FXzIJ2MVL7HarPHtR+VVSAHNyTZvuhZB+8LVR62p4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-ge5tZTOTg69Luo+lA2oWJBJ6n+cbE1IR5tKvX1qIfSQl/fwn0N2BwF2xjxt3hg9e" crossorigin="anonymous">
    </script>
</body>

</html>

@endsection