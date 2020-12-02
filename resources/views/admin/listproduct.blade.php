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

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #08cc1b">
        <a class="navbar-brand-admin" href="{{ route('admin.panel') }}" >Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-right" id="navbarToggler">
        <ul class="navbar-nav ml-3 mr-auto">
            <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Product
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.addproduct') }}">
                            Add
                        </a>
                        <a class="dropdown-item" href="{{ route('admin.listproduct') }}">
                            Show All
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Category
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.addcategory') }}">
                            Add
                        </a>
                        <a class="dropdown-item" href="{{ route('admin.listcategory') }}">
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

    <center>
        <div class="admin_content">
            <h3>Product</h3><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Category</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    <!-- isi nanti, ada di notepad -->
                </tbody>
            </table>
        </div>
    </center>

    @yield('container')

</body>

</html>