<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartPageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function(){
Route::get('/','home')->name('home');
Route::get('/Layouts','app')->name('Layouts.app');
});

Route::get('/products',[ProductsController::class,'index'])->name('Product.products');
Route::get('/product/{id}',[ProductDetailController::class,'show'])->name('product.productDetail');

Route::controller(CartPageController::class)->group(function(){
Route::get('/cart', 'index')->name('cart.index');
Route::post('/cart/add/{id}', 'add')->name('cart.add');
Route::put('/cart/update/{id}', 'update')->name('cart.update');
Route::delete('/cart/remove/{id}', 'remove')->name('cart.remove');

});


Route::controller(UserController::class)->group(function(){
 Route::get('register', [UserController::class, 'showRegisterForm'])->name('register');
 Route::post('register', [UserController::class, 'register']);
 Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
 Route::post('login', [UserController::class, 'login']);
 Route::post('logout', [UserController::class, 'logout'])->name('logout');
});