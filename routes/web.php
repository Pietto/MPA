<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/addtocart', function () {
    return view('addtocart');
});

Route::get('/category/all', [
    'uses' => 'App\Http\Controllers\CategoryController@GetAllCategories', 
    'as' => 'category.all'
]);

Route::get('/category/{id}', [
    'uses' => 'App\Http\Controllers\CategoryController@GetOneCategory', 
    'as' => 'category.one'
]);

Route::get('/products/all', [
    'uses' => 'App\Http\Controllers\ProductController@GetAllProducts', 
    'as' => 'product.all'
]);

Route::get('/product/{id}', [
    'uses' => 'App\Http\Controllers\ProductController@GetOneProduct', 
    'as' => 'product.one'
]);

Route::get('/cart', [
    'uses' => 'App\Http\Controllers\CartController@index', 
    'as' => 'product.shoppingCart'
]);

Route::get('/addtoCart/{id}', [
    'uses' => 'App\Http\Controllers\CartController@store', 
    'as' => 'product.addToCart'
]);