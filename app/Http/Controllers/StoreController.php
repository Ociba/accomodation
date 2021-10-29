<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /** 
     * This function gets store front page
    */
    protected function getStore(){
        return view('frontpages.store');
    }
}
