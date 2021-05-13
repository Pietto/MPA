<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductCategory;
use App\Models\UserOrder;
use App\Models\Order;

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
        $cart->addProducts($product, $id, $request);
        echo 'echo "<script>alert("item aan winkelmandje toegevoegd")</script>";';
        return redirect()->back();
    }

    public function delete($id){
        $cart = new Cart();
        $cart->remove($id, $cart);
        return redirect()->back();
    }

    public function deleteAll(){
        $cart = new Cart();
        $cart->removeAll($cart);
        return redirect()->back();
    }

    public function subtract(Request $request, $id){
        $empty;
        $product = Product::find($id);
        $cart = new Cart();
        $cart->subtractProducts($product, $id, $request);
        return redirect()->back();
    }

    public function checkout(){
        // confirm an order
        $order = new UserOrder();
        Auth::user()->UserOrder()->save($order);           // authenticate to what user this order belongs and assigns the order to this user
        
        // send cart to DB
        $cart = new Cart();
        $cart->checkout($cart);

        // Wipe the cart
        $cart->forget();
        return redirect()->route('home');
    }
}