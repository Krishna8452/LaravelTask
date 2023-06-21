
@extends('home')
@section('cart')

<div class="container">
  <div class="row">
    @foreach($products as $product)
      <div class="col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="products/{{$product->image}}" alt="Card image" style="width:400px, height:400px">
          <div class="card-body">
            <h4 class="card-title">{{$product->title}}</h4>
            <p class="card-text">{{$product->description}}</p>
            <a href="product/{{$product->id}}/addCart" class="btn btn-secondary btn-sm">Add to Cart</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection
