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

<nav class="navbar navbar-expand-lg navbar-green bg-white">
  <a class="navbar-brand" href="/">$okopedia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-right" id="navbarToggler">
        <form class="form-inline my-2 my-lg-0 mx-auto">
            @csrf
            <input class="form-control mx-lg-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <a href="{{ route('user.cart') }}" class="btn btn-green my-2 my-sm-0 ml-2" >Cart<span class="badge badge-light ml-1">0</span></a>
            <a href="{{ route('user.history') }}" class="btn btn-green my-2 my-sm-0 ml-2" >History</a>
        </form>
        <ul class="navbar-nav ml-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="clickLogOut()">
                            Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
  </div>
</nav>

@yield('carousel')

@yield('container')


</body>
</html>