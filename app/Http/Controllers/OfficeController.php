<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /** 
     * This function gets the offices available for rent
    */
    protected function getOffice(){
        return view('frontpages.office');
    }
}
