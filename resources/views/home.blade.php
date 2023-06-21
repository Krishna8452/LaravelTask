@extends('layouts.app')
@section('content')

<div class="container">
    <div class="header-card">
        <nav class="navbar navbar-expand-sm bg-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/shop">Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/shop">shop now </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@yield('cart')
@endsection
