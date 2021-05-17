<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Session;

/**
 * the User model handles everything user related
 * most function are default laravel functions for the login/register system, don't touch it.
 * function deleteSession() deletes the session when asked to do so
 * ^ this function isn't in use in the final version
 */

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function UserOrder(){
        return $this->hasMany('App\Models\UserOrder');
    }

    public function deleteSession(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
