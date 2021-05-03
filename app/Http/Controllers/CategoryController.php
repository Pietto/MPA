<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;

class CategoryController Extends Controller
{
    public function GetAllCategories(){
        $categories = category::get();

        return view('categories', [
            'categories' => $categories
        ]);
    }

    public function GetOneCategory($id){
        $categories = category::where('id', $id)->get();
        $product_ID = ProductCategory::where('category_ID', $id)->pluck('product_ID');
        $products = product::whereIn('id', $product_ID)->get();


        return view('category', [
            'category' => $categories,
            'products' => $products
        ]);
    }
}