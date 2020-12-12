@extends('template.index')

@section('title','$okopedia - Add Product')

@section('container')
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-10 mx-auto">
                <div class="admin_content">
                    <form action="{{ route('admin.addproduct2') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(session('errors'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 90%; margin:auto"><br>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br>
                        @endif
                        <div class="form-group">
                            <h3>Add Product</h3>
                            <b>Name</b>
                            <input type="text" name="name" class="form-control-admin" placeholder="Product Name">
                            <br><b>Category</b>
                            <select name="category" id="category" class="form-control-admin">
                                <option value="0">Select Category</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->name}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <br><b>Description</b>
                            <input type="text" name="description" class="form-control-admin" placeholder="Product Description">
                            <br><b>Price</b>
                            <input type="number" name="price" class="form-control-admin" placeholder="Product Price">
                            <br><b>Choose file</b>
                            <br><input type="file" name="image"><br><br>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="addproduct">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

</body>

</html>