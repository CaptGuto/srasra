<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#004ea7",
                        },
                    },
                },
            };
    </script>
    <title>CareerHub | Find Your Dream Jobs & Projects</title>

    <style>
        .text-danger {
            color: red !important;
        }
    </style>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href={{route('home')}}><img class="w-24" src="images/logo.png" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href={{route('register')}} class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href={{route('login')}} class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        </ul>
    </nav>

    <main>
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Register
                    </h2>
                    <p class="mb-4">Create an account to post gigs</p>
                </header>

                <form action={{route('user')}} method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="inline-block text-lg mb-2">
                            Name
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                            value={{old('name')}} />
                        @error('name')
                        <p class="text-danger small mt-1">{{$message}}</p>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg mb-2">Email</label>
                        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                            value={{old('email')}} />
                        @error('email')
                        <p class="text-danger small mt-1">{{$message}}</p>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label for="password" class="inline-block text-lg mb-2">
                            Password
                        </label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                            value={{old('password')}} />
                        @error('password')
                        <p class="text-danger small mt-1">{{$message}}</p>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <label for="password2" class="inline-block text-lg mb-2">
                            Confirm Password
                        </label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full"
                            name="password_confirmation" value={{old('password_confirmation')}} />
                        @error('password_confirmation')
                        <p class="text-danger small mt-1">{{$message}}</p>
                        @enderror

                    </div>

                    <div class="mb-6">
                        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            Sign Up
                        </button>
                    </div>

                    <div class="mt-8">
                        <p>
                            Already have an account?
                            <a href="register" class="text-laravel">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>


   
