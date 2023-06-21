@extends('admin-home')
@section('product')
<div class='container'>
    <p>Shipped Cart Products</p>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Title</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$product->title}}</td>
        <td>{{$product->quantity}}</td>
        <td>
            <img src="products/{{$product->image}}" class="rounded-circle" height="50" width="50"/>
        </td>
        <td>
           <a href="product/{{$product->id}}/show" class="btn btn-primary btn-sm">View</a>

        </td>
      </tr>
      @endforeach
    </tbody>
    {{$products->links()}}
  </table>
</div>
@endSection 