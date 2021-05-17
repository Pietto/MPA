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

Route::get('/home', [
    'uses' => 'App\Http\Controllers\HomeController@index', 
    'as' => 'home'
]);

Route::get('/addtocart', function () {
    return view('addtocart');
});

Route::get('/test/all', [
    'uses' => 'App\Http\Controllers\TestController@index', 
    'as' => 'test.all'
]);

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

Route::get('/deleteFromCart/{id}', [
    'uses' => 'App\Http\Controllers\CartController@delete', 
    'as' => 'product.delete'
]);

Route::get('/deleteAll', [
    'uses' => 'App\Http\Controllers\CartController@deleteAll', 
    'as' => 'product.deleteAll'
]);

Route::get('/subtractFromCart/{id}', [
    'uses' => 'App\Http\Controllers\CartController@subtract', 
    'as' => 'product.subtractFromCart'
]);

Route::get('/orderItems', [
    'uses' => 'App\Http\Controllers\ProductOrderController@checkout', 
    'as' => 'cart.order'
]);

Route::get('/logout', [
    'uses' => 'App\Http\Controllers\Auth\logoutController@logout', 
    'as' => 'user.kill'
]);

Route::get('/user', [
    'uses' => 'App\Http\Controllers\UserController@showOrders', 
    'as' => 'user.orders'
]);

Auth::routes();