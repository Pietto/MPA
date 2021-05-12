<?
namespace App\Models;

use Session;
use Auth;

class Cart
{
    public $items = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;

    function __construct(){
        $currentCart = Session::has('cart') ? Session::get('cart') : NULL;
        if($currentCart != NULL){
            $this->items = $currentCart->items;
            $this->totalQuantity = $currentCart->totalQuantity;
            $this->totalPrice = $currentCart->totalPrice;
        }
    }

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

    public function remove($id, $cart){
        Session::put('cart', $cart);
        $this->totalQuantity -= $this->items[$id]['quantity'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    public function removeAll($cart){
        Session::put('cart', $cart);
        $this->totalQuantity = 0;
        $this->totalPrice = 0;
        unset($this->items);
    }

    public function subtractProducts($item, $id, $request){

        $categoryID = ProductCategory::where('product_ID', $id)->value('Category_ID');
        $category = Category::where('id', $categoryID)->value('name');

        $currentItem = ['quantity'=>0, 'price'=>$item->price, 'item'=>$item, 'category'=>$category];

        if(array_key_exists($id, $this->items)){
            $currentItem = $this->items[$id];
        }
        
        if($currentItem['quantity'] <= 1){
        }else{
            $currentItem['quantity']--;
            $currentItem['price'] = $currentItem['quantity'] * $item->price;
            $this->items[$id] = $currentItem;
            $this->totalQuantity--;
            $this->totalPrice -= $item->price;
    
            $request->session()->put('cart', $this);
        }
    }
}
