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
        $currentCart = Session::has('Cart') ? Session::get('Cart') : NULL;
        if($currentCart != NULL){
            $this->items = $currentCart->items;
            $this->totalQuantity = $currentCart->totalQuantity;
            $this->totalPrice = $currentCart->totalPrice;
        }
    }

    function addProducts($item, $id, $request, $cart){
        $items = [];
        $totalQuantity = 0;
        $totalPrice = 0;

        $request->session()->put('Cart', $cart);
        $categoryID = ProductCategory::where('product_ID', $id)->value('Category_ID');
        $category = Category::where('id', $categoryID)->value('name');

        $currentItem = ['quantity'=>0, 'price'=>$item->price, 'item'=>$item, 'category'=>$category];        //$product[choice is urs]
        
        if(array_key_exists($id, $this->items)){
            $currentItem = $this->items[$id];
        }

        $currentItem['quantity']++;
        $currentItem['price'] = $currentItem['quantity'] * $item->price;
        $this->items[$id] = $currentItem;
        $this->totalQuantity++;
        $this->totalPrice += $item->price;
    }
}