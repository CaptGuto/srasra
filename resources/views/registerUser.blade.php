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
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
    </script>
    <title>LaraGigs | Register Your Company</title>

    <style>
        .text-danger {
            color: red !important;
        }
    </style>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="index.html"><img class="w-24" src="images/logo.png" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="login.html" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        </ul>
    </nav>

    <main>
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Register Your Company
                    </h2>
                    <p class="mb-4">Create an account to post job listings</p>
                </header>

                <form action={{route('user')}} method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="company_name" class="inline-block text-lg mb-2">
                            Company Name
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company_name"
                            value="{{ old('company_name') }}" />
                        @error('company_name')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="company_email" class="inline-block text-lg mb-2">Company Email</label>
                        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="company_email"
                            value="{{ old('company_email') }}" />
                        @error('company_email')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="company_phone" class="inline-block text-lg mb-2">Company Phone</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company_phone"
                            value="{{ old('company_phone') }}" />
                        @error('company_phone')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="company_address" class="inline-block text-lg mb-2">Company Address</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company_address"
                            value="{{ old('company_address') }}" />
                        @error('company_address')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="inline-block text-lg mb-2">
                            Password
                        </label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                            value="{{ old('password') }}" />
                        @error('password')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password_confirmation" class="inline-block text-lg mb-2">
                            Confirm Password
                        </label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full"
                            name="password_confirmation" value="{{ old('password_confirmation') }}" />
                        @error('password_confirmation')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            Register
                        </button>
                    </div>

                    <div class="mt-8">
                        <p>
                            Already have an account?
                            <a href="login.html" class="text-laravel">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights Reserved</p>

        <a href="create.html" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
    </footer>
</body>

</html>