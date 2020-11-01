<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Shop;
use Auth;
class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo='/parcel';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
