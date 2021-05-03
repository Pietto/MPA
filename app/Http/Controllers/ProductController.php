<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController Extends Controller
{
    public function GetAllProducts(){
        $products = Product::get();

        return view('products', [
            'products' => $products
        ]);
    }

    function getOneProduct($id){
        $product = Product::where('id', $id)->get();

        return view('product', [
            'product' => $product
        ]);
    }
}