<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductCategory;

use Illuminate\Http\Request;
use Session;
use Auth;

class CartController Extends Controller
{
    public function index(){
        $cart = new Cart();
        return view('cart', [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        ]);
    }

    public function store(Request $request, $id){
        $product = Product::find($id);
        $cart = new Cart();
        $cart->addProducts($product, $id, $request, $cart);
        return redirect()->back();
    }
}