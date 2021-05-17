<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

/** this controller handles most product related logic
 *  fetching products with specific category is done in the CategoryController
 */

class ProductController Extends Controller
{

    /** this function returns a view of all products.
     *  $products is an object of all the products, using the ProductController
     */
    public function GetAllProducts(){
        $products = Product::get();

        return view('products', [
            'products' => $products
        ]);
    }

    /** this function returns a view of a specific product.
     *  param $id is the corresponding id of the item clicked 
     *  $product is an array of the object, which has a matching id of the clicked item
     */
    function getOneProduct($id){
        $product = Product::where('id', $id)->get();

        return view('product', [
            'product' => $product
        ]);
    }
}