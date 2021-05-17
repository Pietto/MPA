<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;

/** the CategoryController handles all things related to the category including:
 *  redirecting to view with all categories
 *  directing to view with products of one category
*/

class CategoryController Extends Controller
{
    //this function redirects you to an overview of all categories

    public function GetAllCategories(){
        $categories = Category::get();

        return view('categories', [
            'categories' => $categories
        ]);
    }

    /** function GetOneCategory($id) redirects to a view with all products of a specific category
     *  param $id is the given id of the category that has been selected
     *  $categories picks up the selected category, using the Category controller
     *  $product_ID plucks all id's of the products that are in that category, using the ProductCategory controller
     *  $products are all the products with the id's matching the $product_ID, using the product controller
     *  finally, a view will be returned with all the fetched products
     */ 


    public function GetOneCategory($id){
        $categories = Category::where('id', $id)->get();
        $product_ID = ProductCategory::where('category_ID', $id)->pluck('product_ID');
        $products = product::whereIn('id', $product_ID)->get();


        return view('category', [
            'category' => $categories,
            'products' => $products
        ]);
    }
}