<?
namespace App\Models;

use Session;
use Auth;


// this is the Cart class model. this model handles everything related to the cart
class Cart
{

    // first we define 3 important variables
    public $items = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;

    // function construct defines the three variables using the Session
    function __construct(){
        $currentCart = Session::has('cart') ? Session::get('cart') : NULL;
        if($currentCart != NULL){
            $this->items = $currentCart->items;
            $this->totalQuantity = $currentCart->totalQuantity;
            $this->totalPrice = $currentCart->totalPrice;
        }
    }

    /** function addProducts adds a product to the cart
     *  @param $item is the product that needs to be added to the cart
     *  @param $id is the items id 
     *  @param $request?
     * 
     *  $categoryID is the categories that match the product
     *  $category is the category that matches the product
     *  $currentItem makes the array, in case this product isnt in the cart yet
     *  if the product IS already in the cart, $currentItem will be filled in the if statement
     *  $currentItem gets its stats pushed up by one.
     *  the three vars, defined in the begin of this class get defined
     *  items get pushed into the cart using the session
     */
    function addProducts($item, $id, $request){
        $categoryID = ProductCategory::where('product_ID', $id)->value('Category_ID');
        $category = Category::where('id', $categoryID)->value('name');

        $currentItem = ['quantity'=>0, 'price'=>$item->price, 'item'=>$item, 'category'=>$category];

        if(array_key_exists($id, $this->items)){
            $currentItem = $this->items[$id];
        }

        $currentItem['quantity']++;
        $currentItem['price'] = $currentItem['quantity'] * $item->price;
        $this->items[$id] = $currentItem;
        $this->totalQuantity++;
        $this->totalPrice += $item->price;

        $request->session()->put('cart', $this);
    }

        /**
         * function remove() removes items from the cart
         * @param $id is the id of the item that needs to be removed
         * @param $cart is the entire current cart
         * 
         * the cart gets put in the session
         * the total price and quantity gets lowered
         * the item gets remover from the cart
         */
    public function remove($id, $cart){
        Session::put('cart', $cart);
        $this->totalQuantity -= $this->items[$id]['quantity'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    /**
     * function removeAll() remnoves all items from the cart
     * @param $cart is the entire cart
     * 
     * first, we put the cart in the session
     * the total price and quantity getlowered to 0
     * all items are removed from the cart
     */
    public function removeAll($cart){
        Session::put('cart', $cart);
        $this->totalQuantity = 0;
        $this->totalPrice = 0;
        unset($this->items);
    }

    /**
     * function subtractProducts() removes one amount of an item from the cart
     * @param $item is the item we are handling
     * @param $id is the items id we are handling
     * @param $request?
     * 
     * $categoryID is the categories that match the product
     * $category is the category that matches the product
     * array $currentItem is defined.
     * if the item isnt 0 (quantity) the $currentItem gets replaced with the actual data
     * adjusting the quantity and price is needed
     * the three variables get redefined
     * the session gets the cart back. this should be mostly the same, apart from one quantity
     */
    public function subtractProducts($item, $id, $request){

        $categoryID = ProductCategory::where('product_ID', $id)->value('Category_ID');
        $category = Category::where('id', $categoryID)->value('name');

        $currentItem = ['quantity'=>0, 'price'=>$item->price, 'item'=>$item, 'category'=>$category];

        if(array_key_exists($id, $this->items)){
            $currentItem = $this->items[$id];
        }

        $currentItem['quantity']--;
        $currentItem['price'] = $currentItem['quantity'] * $item->price;
        $this->items[$id] = $currentItem;
        $this->totalQuantity--;
        $this->totalPrice -= $item->price;

        $request->session()->put('cart', $this);
    }

    /**
     * function checkout() completes the order. in a real scenario the payment would take place here, but this is ofcourse not an actual site, so we just push the order to the DB
     * @param $cart is the entire cart we want to push to the DB
     * 
     * first, we create a new Order using the Order Controller
     * after that, we define the orders data.
     * lastly, we save the data so we can call this back later 
     */
    public function checkout($cart){
        foreach($cart->items as $product){
            $productorder = new Order();
            $productorder->product_ID = $product['item']['id'];
            $productorder->product_quantity = $product['quantity'];
            $productorder->order_ID = UserOrder::orderBy('id', 'desc')->value('id');
            $productorder->user_ID = Auth::user()->UserOrder()->value('user_ID');
            $productorder->save();
        }
    }

    // function forget() deletes the cart. this function isnt in use in the final version
    public function forget(){
        Session::forget('cart');
    }
}
