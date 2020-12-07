@extends('template.index')

@section('title','$okopedia - Add Category')

@section('container')
<center>
    <div class="admin_content">
        <form>
            <div class="form-group">
                @csrf
                <h3>Add Category</h3>
                <p>Name</p>
                <input class="form-control" type="text" placeholder="Category Name"><br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="addproduct">Add Category</button>
            </div>
        </form>
    </div>
</center>
@endsection

</body>

<style>
    body{
        background-color: #ecf3f3;
    }
    #navbarDropdown{
        color: white;
    }
    .admin_content{
        width: 800px; 
        padding-top: 25px; 
        padding-bottom: 25px;
        background-color: white;
    }
    .form-control{
        width: 90%;
    }
</style>
</html>