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

<nav class="navbar navbar-expand-lg navbar-green-admin bg-green">
  <a class="navbar-brand-admin" href="{{ route('admin.panel') }}" >Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse text-right" id="navbarToggler">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Product
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('admin.addproduct') }}">
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
                    <a class="dropdown-item" href="{{ route('admin.addproduct') }}">
                        Add
                    </a>
                    <a class="dropdown-item" href="#">
                        Show all
                    </a>
                </div>
            </li>
        </ul>        
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
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

<br><br>

<center>
    <div class="admin_content">
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
    .admin_content{
        width: 800px; 
        padding-top: 25px; 
        padding-bottom: 25px;
        background-color: white;
    }
</style>
</html>