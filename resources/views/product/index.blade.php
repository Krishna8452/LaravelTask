@extends('admin-home')
@section('product')
<div class='container'>
    <div class="text-right" text-align="right" style="margin-left:1200px">
        <a class="btn btn-primary mt-2" href="/product/create">add</a>
    </div>
    <p>Products</p>

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
           <a href="product/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
           <a href="product/{{$product->id}}/delete" class="btn btn-danger btn-sm">Delete</a>

        </td>
      </tr>
      @endforeach
    </tbody>
    {{$products->links()}}
  </table>
</div>
@endSection 