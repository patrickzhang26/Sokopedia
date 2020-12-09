@extends('template.index')

@section('title','$okopedia - Add Category')

@section('container')
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-10 mx-auto">
                <div class="admin_content">
                    <form>
                        <div class="form-group">
                            @csrf
                            <h3>Add Category</h3>
                            <b>Name</b>
                            <input class="form-control-admin" type="text" placeholder="Category Name"><br>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="addproduct">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

</body>

</html>