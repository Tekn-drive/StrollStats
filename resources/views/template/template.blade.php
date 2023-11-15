<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "css/template.css">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <img src="Assets/Title Small.png" width="150" alt="Logo" class="d-inline-block align-text-top">
            <!-- <img src="Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> -->
            <div class="collapse navbar-collapse" id="navbarNav">
    
            
          <ul class="navbar-nav">
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li> -->
                <li class="nav-item">   
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tracker">Track Your Steps</a>
                </li>
            </ul>
            </div>
            </div>
        </nav>
    </header>
    <div>
        @yield('container')
    </div>
<<<<<<< HEAD
    <a href="/home">
        <button id="plusBtn">
            +
        </button>
    </a>
    <footer class="justify-content-between align-items-center py-3 my-4 border-top">
        <div class="container d-flex justify-content-between">
            <div class="col-md-4 align-items-center">
                <a class="navbar-brand" href="{{ url('/') }}">StrollStats</a>
                <span class="mb-3 mb-md-0 text-body-secondary">&copy; {{ date("Y") }} Web Programming Class</span>
            </div>

            <div class="col-md-4 justify-content-end list-unstyled flex-end text-end">
                <a class="text-body-secondary mx-2" style="text-decoration:none" href="#">
                    FACEBOOK
                </a>
                <a class="text-body-secondary mx-2" style="text-decoration:none" href="#">
                    INSTAGRAM
                </a>
                <a class="text-body-secondary mx-2" style="text-decoration:none" href="#">
                    YOUTUBE
                </a>
            </div>
        </div>
    </footer>
=======
>>>>>>> 787a63558d6576e7892a7cc21b1181becbe42723
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>