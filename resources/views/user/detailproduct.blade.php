<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @foreach($selected as $s)
    <title>$okopedia - {{ $s->name }}</title>
    @endforeach
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-green bg-white">
  <a class="navbar-brand" href="/">$okopedia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-right" id="navbarToggler">
        <form class="form-inline my-2 my-lg-0 mx-auto" action="{{ route('user.search') }}" method="GET">
            @csrf
            <input class="form-control mx-lg-2" type="text" name="search" value="{{ old('search') }}" placeholder="Search" >
            <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">
            <a href="{{ route('user.cartdetail') }}" class="btn btn-green my-2 my-sm-0 ml-2" ><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-light ml-2">{{ $count }}</span></a>
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

<div class="container container-product-detail">
        @foreach($selected as $s)
            <div class="row">
                <div class="col-md-6 container-image text-left">
                    <img src="{{asset('storage/images/'.$s->image)}}" class="img img-detail" alt="{{$s->image}}">
                </div>
                <div class="col-md-6 container-product">
                    <h1 class="mt-5 detail-title ml-3">{{ $s->name }}</h1>
                    <h4 class="mt-5 pricetag ml-3">Price: Rp {{ number_format($s->price) }}</h4>
                    <h5 class="mt-5 ml-3">Description: {{ $s->description}}</h5>
                    <a href="{{ url('user/detail/cart/'.$s->id) }}" class="btn btn-green btn-left" >Add To Cart</a>
                </div>
            </div>
        @endforeach
    </div>


</body>
</html>