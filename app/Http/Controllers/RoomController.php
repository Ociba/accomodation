<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RoomController extends Controller
{
    /** 
     * This function gets rooms available
    */
    protected function getRooms(){
        $get_single_rooms =DB::table('properties')->where('category_id',1)->where('status','pending')->get();
        return view('frontpages.rooms', compact('get_single_rooms'));
    }
}
