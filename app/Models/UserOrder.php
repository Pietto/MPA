<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Auth;

/**
 * this functino just returns 2 views, and makes sure table 'user_order' doesn't get renamed by laravel magic
 */

class UserOrder extends Model
{
    use HasFactory;

    protected $table = 'user_order';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function order(){
        return $this->hasMany('App\Models\Order', 'order_id');
    }
}