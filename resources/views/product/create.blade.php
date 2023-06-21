@extends('admin-home')
@section('product')
<div class='container'>
  <div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card mt-3 p-3">
            <h2 class=" text-items-center">Create Product</h2>
            <form method="POST" action="/product/store" enctype="multipart/form-data">
                @csrf
                <div class="card-mt-3 p-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control"/>
                    @if($errors->has('title'))
                    <span class="text-danger">{{  $errors->first('title'
                        ) }}</span>
                    @endif
                </div>
                <div class="card-mt-3 p-3">
                    <label>Quantity</label>
                    <input  type="text" name="quantity" class="form-control"/>
                    @if($errors->has('quantity'))
                    <span class="text-danger">{{  $errors->first('quantity'
                        ) }}</span>
                    @endif
                </div>
                <div class="card-mt-3 p-3">
                    <label>Description</label>
                    <textarea  type="text" name="description" class="form-control"></textarea>
                    @if($errors->has('description'))
                    <span class="text-danger">{{  $errors->first('description'
                        ) }}</span>
                    @endif
                </div>
                <div class="card-mt-3 p-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control"/>
                    @if($errors->has('image'))
                    <span class="text-danger">{{  $errors->first('image'
                        ) }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
  </div>
</div>
@endSection 