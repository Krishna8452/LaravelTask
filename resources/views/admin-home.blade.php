@extends('layouts.app')
@section('content')

<div class="header-card">
<nav class="navbar navbar-expand-sm bg-light" style="margin-left:600px">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-dark" href="/product"><h3>Product</h3></a>
    </li>

    <li class="nav-item" style="margin-left:100px">
      <a class="nav-link text-dark" href="/cart"><h3>Cart</h3></a>
    </li>
  </ul>
</nav>
</div>
@yield('product')
@endsection
