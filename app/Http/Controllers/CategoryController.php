<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;

class CategoryController Extends Controller
{
    public function GetAllCategories(){
        $categories = Category::get();

        return view('categories', [
            'categories' => $categories
        ]);
    }

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