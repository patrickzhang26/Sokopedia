@extends('template.index')

@section('title','$okopedia - Add Product')

@section('container')
<center>
    <div class="admin_content">
        <form>
            <div class="form-group">
                @csrf
                <h3>Add Product</h3>
                <p>Name</p>
                <input class="form-control" type="text" placeholder="Product Name">
                <p>Category</p>
                <select name="category" id="category" class="form-control">
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
                </select>
                <p>Description</p>
                <input class="form-control" type="text" placeholder="Product Description">
                <p>Price</p>
                <input class="form-control" type="number" placeholder="Product Price">
                <p>Choose File</p>
                <input type="file" id="productfile" name="productfile"><br><br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="addproduct">Add Product</button>
            </div>
        </form>
    </div>
</center>
@endsection

</body>

</html>