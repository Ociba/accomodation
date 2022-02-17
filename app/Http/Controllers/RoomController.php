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
        $get_single_rooms =DB::table('properties')->where('category_id',1)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $double_rooms =DB::table('properties')->where('category_id',2)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $get_all_the_property =DB::table('properties')->join('categories','categories.id','properties.category_id')
        ->where('status','pending')->orderBy('properties.created_at',"Desc")
        ->select('properties.*','categories.category_name')->get();
         
        $hostels =DB::table('properties')->where('category_id',3)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $houses =DB::table('properties')->where('category_id',4)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $plots=DB::table('properties')->where('category_id',6)->where('status','pending')->orderBy('created_at',"Desc")->get();
        return view('frontpages.rooms', compact('get_single_rooms','double_rooms','get_all_the_property','hostels','houses','plots'));
    }
}
