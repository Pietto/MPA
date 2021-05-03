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
        $category = category::where('id', $id)->get();
        $product = product::where('id', $id)->get();
        $ProductCategory = ProductCategory::where('category_ID', $id)->get();

        return view('category', [
            'category' => $category,
            'product' => $product
        ]);
    }
}