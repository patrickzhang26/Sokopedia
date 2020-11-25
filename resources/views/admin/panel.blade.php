<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #08cc1b;">
  <a class="navbar-brand" href="/admin" style="margin-left: 50px;">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-right" id="navbarToggler">
  <ul class="navbar-nav ml-auto" style="margin-right: 900px">
    <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Product
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">
                    Add
                </a>
                <a class="dropdown-item" href="#">
                    Show All
                </a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Category
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">
                    Add
                </a>
                <a class="dropdown-item" href="#">
                    Show all
                </a>
            </div>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <!-- @guest -->

        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                $okopedia
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('login') }}">
                    Login As User
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="clickLogOut()">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
            <!-- @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endif -->
            <!-- @else -->
            
        <!-- @endguest -->
    </ul>
  </div>
</nav><br><br>

<center>
    <div style="width: 800px; padding-top: 25px; padding-bottom: 25px;background-color: white;">
        <h3>Admin</h3>
    </div>
</center>

@yield('container')

</body>

<style>
    body{
        background-color: #ecf3f3;
    }
    #navbarDropdown{
        color: white;
    }
</style>
</html>