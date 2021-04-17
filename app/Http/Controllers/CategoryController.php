<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class CategoryController Extends Controller
{
    public function GetAllProducts(){
        $products = Product::get();

        return view('Products', [
            'products' => $products
        ]);
    }
}