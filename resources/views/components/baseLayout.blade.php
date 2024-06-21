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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .bg-laravel {
      background-color: #004ea7;
    }
    .hover-text-laravel:hover {
      color: #004ea7;
    }
    .form-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .form-container form {
      width: 100%;
    }
    .nav-link {
      display: flex;
      align-items: center;
    }
  </style>
  <title>CareerHub | Find Your Dream Jobs & Projects</title>
</head>
<body class="mb-5">
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img class="w-24" src="{{asset('images/logo.png')}}" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item">
            <span class="nav-link active font-weight-bold text-uppercase">Welcome {{auth()->user()->name}}</span>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-text-laravel" href="manage.html"><i class="fa-solid fa-gear"></i>  Manage Listings</a>
          </li>
          <li class="nav-item">
            <form class="d-inline hover-text-laravel" method="GET" action="/logout">
              @csrf
              <button type="submit" class="btn btn-link nav-link"><i class="fa-solid fa-door-closed"></i>  Logout</button>
            </form>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link hover-text-laravel" href="/register"><i class="fa-solid fa-user-plus"></i> Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover-text-laravel" href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  <main>
    {{$slot}}
  </main>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
