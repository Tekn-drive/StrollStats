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
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm bg-info"> -->
        <div class="container mx-auto">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('Assets/Title Small.png') }} " width="150" alt="Logo" class="d-inline-block align-text-top">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                <li class="nav-item">   
                <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">   
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tracker">Track Your Steps</a>
            </li>
            <!-- <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-link">Logout</button>
                </form>
            </li> -->
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @yield('container')
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>