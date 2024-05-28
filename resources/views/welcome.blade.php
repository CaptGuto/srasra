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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>LaraGigs | Find Laravel Jobs & Projects</title>
    <style>
        .bg-laravel {
            background-color: #ef3b2d;
        }

        .hover-text-laravel:hover {
            color: #ef3b2d;
        }

        .bg-overlay {
            background-image: url('images/laravel-logo.png');
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.1;
        }
    </style>
</head>

<body class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img class="w-25" src="images/logo.png" alt="logo" />
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link hover-text-laravel" href="register.html">
                            <i class="fa-solid fa-user-plus"></i> Register
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-text-laravel" href="login.html">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                        </a>
                    </li>
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
                Sra<span class="text-dark">Sra</span>
            </h1>
            <p class="display-6 fw-bold my-4">Find or post Any Kind of jobs & projects</p>
            <a href="register.html" class="btn btn-outline-light rounded-pill text-uppercase mt-2">Sign Up to List a
                Gig</a>
        </div>
    </section>

    <main class="container">
        <!-- Search -->
        <form action="">
            <div class="input-group mb-4">
                <span class="input-group-text bg-white border-0">
                    <i class="fa fa-search text-gray"></i>
                </span>
                <input type="text" name="search" class="form-control border-0 shadow-none"
                    placeholder="Search SraSra..." />
                <button type="submit" class="btn btn-danger text-white rounded-end">
                    Search
                </button>
            </div>
        </form>

        <div class="row g-4">
            <!-- Item 1 -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/acme.png" class="img-fluid rounded-start d-none d-md-block"
                                alt="Acme Corp" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="show.html" class="text-dark">Senior Laravel Developer</a>
                                </h3>
                                <h5 class="card-subtitle mb-2 text-muted">Acme Corp</h5>
                                <div class="d-flex flex-wrap mb-3">
                                    <span class="badge bg-dark text-white me-2 mb-2">Laravel</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">API</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">Backend</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">Vue</span>
                                </div>
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Boston, MA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/stark.png" class="img-fluid rounded-start d-none d-md-block"
                                alt="Stark Industries" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="show.html" class="text-dark">Full-Stack Engineer</a>
                                </h3>
                                <h5 class="card-subtitle mb-2 text-muted">Stark Industries</h5>
                                <div class="d-flex flex-wrap mb-3">
                                    <span class="badge bg-dark text-white me-2 mb-2">Laravel</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">API</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">Backend</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">Vue</span>
                                </div>
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Lawrence, MA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/wayne.png" class="img-fluid rounded-start d-none d-md-block"
                                alt="Wayne Enterprises" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="show.html" class="text-dark">Laravel Developer</a>
                                </h3>
                                <h5 class="card-subtitle mb-2 text-muted">Wayne Enterprises</h5>
                                <div class="d-flex flex-wrap mb-3">
                                    <span class="badge bg-dark text-white me-2 mb-2">Laravel</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">API</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">Backend</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">Vue</span>
                                </div>
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Newark, NJ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/skynet.png" class="img-fluid rounded-start d-none d-md-block"
                                alt="Skynet Systems" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="show.html" class="text-dark">Backend Laravel Dev</a>
                                </h3>
                                <h5 class="card-subtitle mb-2 text-muted">Skynet Systems</h5>
                                <div class="d-flex flex-wrap mb-3">
                                    <span class="badge bg-dark text-white me-2 mb-2">Laravel</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">API</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">Backend</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">Vue</span>
                                </div>
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Daytona, FL</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/wonka.png" class="img-fluid rounded-start d-none d-md-block"
                                alt="Wonka Industries" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="show.html" class="text-dark">Junior Developer</a>
                                </h3>
                                <h5 class="card-subtitle mb-2 text-muted">Wonka Industries</h5>
                                <div class="d-flex flex-wrap mb-3">
                                    <span class="badge bg-dark text-white me-2 mb-2">Laravel</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">API</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">Backend</span>
                                    <span class="badge bg-dark text-white me-2 mb-2">Vue</span>
                                </div>
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> San Francisco, CA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-laravel text-white text-center py-4 mt-5">
        <div class="container position-relative">
            <p class="mb-0">Copyright &copy; 2022, All Rights Reserved</p>
            <a href="create.html" class="btn btn-dark position-absolute end-0 translate-middle-y" style="top: 50%;">Post
                Job</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>