<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    /** 
     * This function gets rooms available
    */
    protected function getRooms(){
        return view('frontpages.rooms');
    }
}
