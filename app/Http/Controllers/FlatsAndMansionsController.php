<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlatsAndMansionsController extends Controller
{
    /** 
     * This function gets flats and mansions
    */
    protected function getFlatsAndMansions(){
        return view('frontpages.flats_and_mansions');
    }
}
