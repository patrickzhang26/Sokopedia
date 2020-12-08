@extends('template.base')

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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>USER</strong>!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection