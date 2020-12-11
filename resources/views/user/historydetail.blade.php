@extends('template.base')

@section('title','$okopedia - History Detail')

@section('container')

<div class="container">
    <div class="card-deck mt-5">
        @foreach($selected as $s)
        <div class="card">
            <img class="card-img-top2 product-img-hist mx-auto mt-3" src="{{asset('storage/images/'.$s->product->image)}}" alt="{{ $s->product->name }}">
            <div class="card-body">
                <h3 class="card-title mt-3 text-center"><strong>{{ $s->product->name }}</strong></h3>
                <h5 class="mt-3 text-center">Quantity: {{ $s->quantity }} </h5>
                <h5 class="mt-3 text-center">Price: Rp {{ number_format($s->total) }} </h5>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pagination center-links">
        {{$selected->withQueryString()->links()}}
    </div>
</div>

@endsection

