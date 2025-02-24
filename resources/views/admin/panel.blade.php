@extends('template.index')

@section('title','$okopedia - Admin Panel')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"><br><br>
            <div class="card">
                <div class="card-header">ADMIN Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>ADMIN</strong>!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>

</html>