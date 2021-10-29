<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthenticationController extends Controller
{
    protected function logoutUser(){
        Auth::logout();
        return redirect('/');
    }
}
