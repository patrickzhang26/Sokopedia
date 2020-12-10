@extends('template.base')

@section('title','$okopedia')

@section('carousel')
<div id="carouselSokopedia" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselSokopedia" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSokopedia" data-slide-to="1"></li>
        <li data-target="#carouselSokopedia" data-slide-to="2"></li>
        <li data-target="#carouselSokopedia" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('storage/carousel/carousel1.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('storage/carousel/carousel2.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('storage/carousel/carousel3.jpg')}}" alt="Third slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('storage/carousel/carousel4.jpg')}}" alt="Fourth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselSokopedia" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselSokopedia" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection

@section('container')
<div class="container h-100">
    <div class="container-fluid container-gap">
        <div class="card-deck">
            @foreach($products as $p)
            <div class="card">
                <img class="card-img-top product-img-store mx-auto" src="{{asset('storage/images/'.$p->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $p->name }}</h5>
                <p class="card-text">IDR {{ $p->price }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ url('user/detail/'.$p->id) }}" class="btn btn-green btn-lg btn-block">Product Detail</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination center-links">
            {{$products->withQueryString()->links()}}
        </div>
    </div>
</div>
@endsection