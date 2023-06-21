<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/product/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}/update', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::get('/product/{id}/delete', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
Route::get('/product/{id}/show', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');


Route::get('/shop', [App\Http\Controllers\ProductController::class, 'getProduct'])->name('getproduct');
Route::get('/product/{id}/addCart', [App\Http\Controllers\ProductController::class, 'addCart'])->name('product.addCart');
Route::get('/cart', [App\Http\Controllers\ProductController::class, 'cartfetch'])->name('product.cartfetch');










