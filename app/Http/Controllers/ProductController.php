<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Carts;


class ProductController extends Controller
{
    public function index()
    {
        return view('product.index',['products'=> Product::latest()->paginate(5)
    ]);

    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'image' => 'required'

        ]);
        $fileName = time().'.'.$request->file('image')->extension();
        $request->file('image')->move(public_path('products'), $fileName);

        $product = new Product;
        $product->title= $request->title;
        $product->image= $fileName;
        $product->quantity= $request->quantity;
        $product->description= $request->description;
        $product->save();
        return redirect('/product')->withSuccess('product created !!!!!');

    }
    public function edit($id){
        $product = Product::where('id',$id)->first();
        return view('product.edit',[ 'product'=>$product]);

    }
    public function update(Request $request,$id){
        $request->validate([
            'title' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'image' => 'required'

        ]);
        $product = Product::where('id', $id)->first();
        if(isset($request->image)){

        $fileName = time().'.'.$request->file('image')->extension();
        $request->file('image')->move(public_path('products'), $fileName);
        $product->image=$fileName;
        }

        $product->title= $request->title;
        $product->quantity= $request->quantity;
        $product->description= $request->description;
        $product->save();
        return back()->withSuccess('product updated !!!!!');
    }
    public function destroy($id){
      $product=Product::where('id', $id)->first();
      $product->delete();
      return back()->withSuccess('product deleted !!!!!');
    }
    public function show($id){
        $product=Product::where('id', $id)->first();
        return view('product.show',['product'=>$product]);
    }

    public function getProduct(){
        return view('cart.productlist',['products'=> Product::latest()->paginate(10)
    ]);
    }
    public function addCart($id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            return redirect('/shop')->withError('Product not found.');
        }
    
        $cart = new Carts();
        $cart->id = $product->id;
        // Add other fields from the Product table to the Cart table if needed
        $cart->title = $product->title;
        $cart->image = $product->image;
        $cart->quantity = $product->quantity;
        $cart->description = $product->description;
        $cart->save();
    
        return redirect('/shop')->withSuccess('Product added to cart successfully.');
    }
    public function cartfetch(){
        return view('cart.index',['products'=> Carts::paginate(5)]);

    }
    
}
