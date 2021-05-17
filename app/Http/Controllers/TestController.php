<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

// this controller is no longer in use
class TestController Extends Controller
{
    public function index(){
        return view('welcome');
    }
}