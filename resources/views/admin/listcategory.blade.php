@extends('template.index')

@section('title','$okopedia - Categories')

@section('container')
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-10 mx-auto">
                <div class="admin_content">
                    <h3>Category</h3>
                    @foreach($categories as $cat)
                    <table class="table table-bordered">
                        <tr><th><a data-toggle="collapse" href="#{{$cat->name}}" aria-expanded="false" aria-controls="$cat">{{$cat->name}}</a></th></tr>
                    </table>
                    <div class="collapse multi-collapse" id="{{$cat->name}}">
                        <h3>{{$cat->name}} Products</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Product Description</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach($products as $prod)
                                    @if($prod->category == $cat->name)
                                        <tr>
                                            <td>{{$prod->id}}</td>
                                            <td><img class="product-img" src="{{asset('storage/images/'.$prod->image)}}" alt=""></td>
                                            <td>{{$prod->name}}</td>
                                            <td>{{$prod->price}}</td>
                                            <td>{{$prod->description}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

</body>

</html>