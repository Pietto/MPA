<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Logout Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    | redirect('/) redirects user back to homescreen
    |
    |
    */

    use AuthenticatesUsers;
    
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
