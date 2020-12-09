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
                            @foreach($products as $p)
                                <tr>
                                    <td>{{$p->id}}</td>
                                    <td><img src="{{$p->image}}" alt=""></td>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->category}}</td>
                                    <td>{{$p->price}}</td>
                                    <td>{{$p->description}}</td>
                                    <td><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></td>
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