<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * this model handles everything order related, which isnt a lot to be honest
 * it just returns 2 views, nothing spectacular
 */

class Order extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
    public function UserOrder(){
        return $this->belongsTo('App\Models\UserOrder');
    }
}