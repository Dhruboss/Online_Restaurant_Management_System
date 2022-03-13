<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/product', [ProductController::class, 'productlist'])->name('product');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login');
Route::get('/signup', [CustomerController::class, 'signup'])->name('signup');
Route::post('/signup', [CustomerController::class, 'signupsubmitted'])->name('signup');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/addtocart/{id}',[ProductController::class,'addtocart'])->name('products.addtocart');
Route::get('/emptycart',[ProductController::class,'emptycart'])->name('products.emptycart');
Route::get('/cart',[ProductController::class,'mycart'])->name('products.mycart');
Route::post('/checkout',[ProductController::class,'checkout'])->middleware('ValidCustomer')->name('checkout');

Route::get('/customer/myorders',[CustomerController::class,'myorders'])->middleware('ValidCustomer')->name('customer.myorders');
Route::get('/customer/myorders/details/{id}',[CustomerController::class,'orderdetails'])->middleware('ValidCustomer')->name('customer.myorders.details');
