@extends('template.base')

@section('title','$okopedia - History')

@section('container')
<div class="container h-100">
    <div class="list-group">
    <button type="button" class="list-group-item list-group-item-success mt-5">
    Transaction History
    </button>
    @foreach($transaction->$t)
    <a href="url('/user/history/detail'.$t->id)" class="list-group-item list-group-item-action">$t->created_at</a>
    @endforeach
    </div>
</div>
@endsection