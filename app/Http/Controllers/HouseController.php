<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    /** 
     * This function gets house
    */
    protected function getHouse(){
        return view('frontpages.house');
    }
}
