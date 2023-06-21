@extends('admin-home')
@section('product')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
           <div class="card p-4">
            <p>Title: <b>{{$product->title}}</b></p>
            <p>Quantity: <b>{{$product->quantity}}</b></p>
            <p>Description: <b>{{$product->description}}</b></p>
            <img src="/products/{{$product->image}}" class="rounded" width="100%"/>
           </div>
        </div>
    </div>
</div>
@endsection