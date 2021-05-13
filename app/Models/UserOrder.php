<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Auth;

class UserOrder extends Model
{
    use HasFactory;

    protected $table = 'user_order';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function order(){
        dd('asdf');
        return $this->hasMany('App\Models\Order', 'order_id');
    }
}