@extends('template.index')

@section('title','$okopedia - Add Category')

@section('container')
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-10 mx-auto">
                <div class="admin_content">
                    <form action="{{ route('admin.addcategory2') }}" method="post">
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
                            <h3>Add Category</h3>
                            <b>Name</b>
                            <input type="text" name="name" class="form-control-admin" placeholder="Category Name" required><br>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

</body>

</html>