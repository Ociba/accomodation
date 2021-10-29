<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /** 
     * This function gets apartment
    */
    protected function getApartment(){
        return view('frontpages.apartment');
    }
}
