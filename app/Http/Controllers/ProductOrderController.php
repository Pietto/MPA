<?
namespace App\Http\Controllers;

use Session;
use Auth;

use App\Models\UserOrder;
use App\Models\Order;
use App\Models\Cart;

class ProductOrderController{
    // this function completes your order after ordering the cart
    public function checkout(){
        // confirm an order
        $order = new UserOrder();
        // authenticate to what user this order belongs and assigns the order to this user
        Auth::user()->UserOrder()->save($order);
        // export cart to the database
        $cart = new Cart();
        
        foreach($cart->items as $product){
            $productorder = new Order();
            $productorder->product_ID = $product['item']['id'];
            $productorder->product_quantity = $product['quantity'];
            $productorder->order_ID = UserOrder::orderBy('id', 'desc')->value('id');
            $productorder->user_ID = Auth::user()->UserOrder()->value('user_ID');
            $productorder->save();
        }

        // Empty the cart for obvious reasons
        $cart->forget();
        return redirect()->back();
    }
}
