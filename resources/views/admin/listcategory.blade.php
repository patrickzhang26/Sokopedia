@extends('template.index')

@section('title','$okopedia - Show All Category')

@section('container')
    <center>
        <div class="admin_content">
            <h3>Category</h3>
            <table class="table table-bordered">
                <tr><th><a data-toggle="collapse" href="#handphoneCategory" aria-expanded="false" aria-controls="handphoneCategory">Handphone</a></th></tr>
                <tr><th><a data-toggle="collapse" href="#laptopCategory" aria-expanded="false" aria-controls="laptopCategory">Laptop</a></th></tr>
                <tr><th><a data-toggle="collapse" href="#tvCategory"  aria-expanded="false" aria-controls="tvCategory">TV</a></th></tr>
            </table><br>
            <div class="collapse multi-collapse" id="handphoneCategory">
                <h3>Handphone Products</h3>
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
                        @foreach($handphone as $hp)
                            <tr>
                                <td>{{$hp->id}}</td>
                                <td><img src="{{$hp->image}}" alt=""></td>
                                <td>{{$hp->name}}</td>
                                <td>{{$hp->price}}</td>
                                <td>{{$hp->description}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><br>
            <div class="collapse multi-collapse" id="laptopCategory">
                <h3>Laptop Products</h3>
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
                        @foreach($laptop as $lt)
                            <tr>
                                <td>{{$lt->id}}</td>
                                <td><img src="{{$lt->image}}" alt=""></td>
                                <td>{{$lt->name}}</td>
                                <td>{{$lt->price}}</td>
                                <td>{{$lt->description}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><br>
            <div class="collapse multi-collapse" id="tvCategory">
                <h3>TV Products</h3>
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
                        @foreach($tv as $tv)
                            <tr>
                                <td>{{$tv->id}}</td>
                                <td><img src="{{$tv->image}}" alt=""></td>
                                <td>{{$tv->name}}</td>
                                <td>{{$tv->price}}</td>
                                <td>{{$tv->description}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><br>
        </div>
    </center>
@endsection

</body>

</html>