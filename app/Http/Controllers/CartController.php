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

// the CartController manages everything related tot he cart. From directing to the view to checkout.

class CartController Extends Controller
{
    // function index() is used to direct to the products page, giving the products and the price as 'parameters'
    public function index(){
        $cart = new Cart();
        return view('cart', [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        ]);
    }

    /* this function adds items to the cart
     * param $id is the target id, defined at the onclick of an <img> or <a>
     * Product::find($id); finds the target product
     * making a new Cart is necessary
     * $cart->addProducts($params); defines all logic
     * after the product is added to the cart, a redirect to the last page will take place
    **/
    public function store(Request $request, $id){
        $product = Product::find($id);                                                  
        $cart = new Cart();
        $cart->addProducts($product, $id, $request);
        return redirect()->back();
    }

    /* this function deletes items from the cart. this can be done in the cart.blade.php by clicking the trash icon, or reducing a product amount < 1
     * param $id is the target id
     * as always a new cart will be made
     * $cart->remove($params); defines all logic
     * after the product is deleted from the cart, a redirect to the last page (cart.blade.php) will take place
    **/
    public function delete($id){
        $cart = new Cart();
        $cart->remove($id, $cart);
        return redirect()->back();
    }

    /* this function deletes all items from the cart.
     * no parameters are reqiuered since we dont need to alter any specific items
     * as always a new cart will be made
     * $cart->removeAll($param); defines all logic
     * after the product is deleted from the cart, a redirect to the last page (cart.blade.php) will take place
    **/
    public function deleteAll(){
        $cart = new Cart();
        $cart->removeAll($cart);
        return redirect()->back();
    }

    /* this function subracts one item from the cart, chosen by the user. (basically a reverse addToCart function)
     * param $id is the target id
     * as always a new cart will be made
     * $cart->subtractProducts($params); defines all logic
     * after the product is subtracted from the cart, a redirect to the last page (cart.blade.php) will take place
     * cart.blade.php makes sure that this function only happens if the amount of items is > 2. when an item quantity is 1, and reduced to 0 the deleteAll() function will be called
    **/
    public function subtract(Request $request, $id){
        $product = Product::find($id);
        $cart = new Cart();
        $cart->subtractProducts($product, $id, $request);
        return redirect()->back();
    }

    // this function completes your order after ordering the cart
    public function checkout(){
        // confirm an order
        $order = new UserOrder();
        // authenticate to what user this order belongs and assigns the order to this user
        Auth::user()->UserOrder()->save($order);
        // export cart to the database
        $cart = new Cart();
        $cart->checkout($cart);
        // Empty the cart for obvious reasons
        $cart->forget();
        return redirect()->back();
    }
}