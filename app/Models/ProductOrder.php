<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * this functino just returns 2 views, and makes sure table 'product_order' doesn't get renamed by laravel magic
 */

class ProductOrder extends Model
{
    use HasFactory;
    protected $table = 'product_order';

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
    public function order(){
        return $this->belongsTo('App\Models\Order');
    }
}