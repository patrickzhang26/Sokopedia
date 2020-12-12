@extends('template.base')

@section('title','$okopedia - Cart')

@section('container')
<div class="cart-container container mt-5">
			<div class="cart_inner">
                <form action="{{ route('user.update') }}" method="post">
                    @csrf
                    <div class="table-responsive">
                        @if(Cookie::has('carts'))
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                @foreach ($carts as $row)
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="{{ asset('storage/images/'.$row['image']) }}" class="cart-image" alt="{{ $row['name'] }}">
                                            </div>
                                            <div class="media-body">
                                                <p>{{ $row['name'] }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6>Rp {{ number_format($row['price']) }}</h6>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <input type="text" name="qty[]" id="quantity{{ $row['id'] }}" maxlength="12" value="{{ $row['qty'] }}" class="form-control form-control-user ml-6">
                                            <input type="hidden" name="id[]" value="{{ $row['id'] }}" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <h5>Rp {{ number_format($row['price'] * $row['qty']) }}</h5>
                                    </td>
                                    <td>
                                        <button class="btn btn-green"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                        <a href="{{ url('user/cart/'.$row['id']) }}" class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                            <tr class="bottom_button">
                                    <td>
                                    <a href="{{ route('user.checkout') }}" class="btn btn-danger btn-checkout ml-3 mb-4">Checkout</a>
                                </td>
                            </tr>
                        @else
                        <h1 class="text-center">Cart is Empty</h1>
                        @endif
                    </div>
                </form>
			</div>
</div>
@endsection