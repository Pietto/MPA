<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\UserOrder;
use App\Models\Order;
use Auth;

// this controller handles anything user related
class UserController Extends Controller
{

    /** this function shows an order history of the current user 
     *  $orders is an object opf all the bought items
     *  $products gets all the products, only the ones bought will be displayed in the view
     */
    public function showOrders(){
        $orders = Auth::user()->UserOrder;
        $products = Product::get();
        return view('account', [
            'orders' => $orders,
            'products' => $products
        ]);
    }
}