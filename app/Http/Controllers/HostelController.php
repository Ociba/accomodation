<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HostelController extends Controller
{
    /** 
     * This function gets the hostel pages
    */
    protected function getHostel(){
        $get_rooms =DB::table('properties')->join('categories','categories.id','properties.category_id')
        ->where('properties.category_id',1)->orwhere('properties.category_id',2)
        ->where('properties.status','pending')->orderBy('properties.created_at',"Desc")
        ->select('properties.*','categories.category_name')->get();

        $get_all_the_property =DB::table('properties')->join('categories','categories.id','properties.category_id')
        ->where('status','pending')->orderBy('properties.created_at',"Desc")
        ->select('properties.*','categories.category_name')->get();
         
        $hostels =DB::table('properties')->where('category_id',3)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $houses =DB::table('properties')->where('category_id',4)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $plots=DB::table('properties')->where('category_id',6)->where('status','pending')->orderBy('created_at',"Desc")->get();
        return view('frontpages.hostel', compact('hostels','get_rooms','houses','plots','get_all_the_property'));
    }
}
