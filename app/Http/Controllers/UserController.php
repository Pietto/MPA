<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\UserOrder;
use App\Models\Order;
use Auth;

class UserController Extends Controller
{
    public function showOrders(){
        $orders = Auth::user()->UserOrder;
        $products = Product::get();
        return view('account', [
            'orders' => $orders,
            'products' => $products
        ]);
    }
}