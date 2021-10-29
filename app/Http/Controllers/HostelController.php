<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostelController extends Controller
{
    /** 
     * This function gets the hostel pages
    */
    protected function getHostel(){
        return view('frontpages.hostel');
    }
}
