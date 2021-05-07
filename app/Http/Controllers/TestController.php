<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

class TestController Extends Controller
{
    public function index(){
        return view('welcome');
    }
}