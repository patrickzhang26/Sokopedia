@extends('template.index')

@section('title','$okopedia - Add Product')

@section('container')
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-10 mx-auto">
                <div class="admin_content">
                    <form>
                        <div class="form-group">
                            @csrf
                            <h3>Add Product</h3>
                            <b>Name</b>
                            <input class="form-control-admin" type="text" placeholder="Product Name">
                            <br><b>Category</b>
                            <select name="category" id="category" class="form-control-admin">
                                <option value="placeholder">Select Category</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->name}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <br><b>Description</b>
                            <input class="form-control-admin" type="text" placeholder="Product Description">
                            <br><b>Price</b>
                            <input class="form-control-admin" type="number" placeholder="Product Price">
                            <br><b>Choose file</b>
                            <br><input type="file" id="productfile" name="productfile"><br><br>
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