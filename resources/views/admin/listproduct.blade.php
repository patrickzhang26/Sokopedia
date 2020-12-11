@extends('template.index')

@section('title','$okopedia - Show All Category')

@section('container')
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-10 mx-auto">
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
                            @foreach($products as $prod)
                                <tr>
                                    <td>{{$prod->id}}</td>
                                    <td><img class="product-img" src="{{asset('storage/images/'.$prod->image)}}" alt=""></td>
                                    <td>{{$prod->name}}</td>
                                    <td>{{$prod->category}}</td>
                                    <td>{{$prod->price}}</td>
                                    <td>{{$prod->description}}</td>
                                    <td><a class="btn btn-danger" href="/admin/listproduct/delete/{{$prod->id}} }}">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

</body>

</html>