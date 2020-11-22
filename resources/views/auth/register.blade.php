@extends ('template.base')

@section('title','Sokopedia - Register')

@section('container')
<div class="container">
    <div class="col-md-10 mt-5 ml-6">
        <div class="card">
            <div class="card-header">
                Register
            </div>

            <div class="card-body">
            <form class="form-horizontal" action="{{ route('register') }}" method="post">
                @csrf
                <div class="card-body">
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Name :</label>
                        <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">E-mail Address :</label>
                        <div class="col-sm-8">
                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Password :</label>
                        <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPasswordConfirm" class="col-sm-3 col-form-label">Confirm Password :</label>
                        <div class="col-sm-8">
                        <input type="password" name="password_confirmation" class="form-control" id="inputPasswordConfirm" placeholder="" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block-register ml-12">Register</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

</div>