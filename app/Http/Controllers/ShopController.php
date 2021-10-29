<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /** 
     * This function gets the shop available
    */
    protected function getShop(){
        return view('frontpages.shop');
    }
}
