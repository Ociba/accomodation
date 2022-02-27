<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use DB;

class SearchPropertyController extends Controller
{
    public function searchProperty(){
        if(Property::where('location', request()->location)->doesntExist())
        {
            return Redirect()->back()->withInput()->withErrors('Location does not Exist');
        }elseif(Property::where('bedroom', request()->bedroom)->doesntExist())
        {
            return Redirect()->back()->withInput()->withErrors('Bedroom does not Exist');
        }elseif(Category::where('category_name', request()->category_name)->doesntExist())
        {
            return Redirect()->back()->withInput()->withErrors('Category does not Exist');
        }elseif(Property::where('price', request()->price)->doesntExist())
        {
            return Redirect()->back()->withInput()->withErrors('Price does not Exist');
        }
        $get_all_the_property =DB::table('properties')->join('categories','categories.id','properties.category_id')
        ->where('status','pending')->orderBy('properties.created_at',"Desc")
        ->where('properties.location',request()->location)
        ->where('properties.bedroom',request()->bedroom)
        ->where('categories.category_name',request()->category_name)
        ->where('properties.price',request()->price)
        ->select('properties.*','categories.category_name')->get();

        $get_rooms =DB::table('properties')->join('categories','categories.id','properties.category_id')
        ->where('properties.category_id',1)->orwhere('properties.category_id',2)
        ->where('properties.status','pending')->orderBy('properties.created_at',"Desc")
        ->select('properties.*','categories.category_name')->get();
         
        $hostels =DB::table('properties')->where('category_id',3)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $houses =DB::table('properties')->where('category_id',4)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $apartments =DB::table('properties')->where('category_id',5)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $plots=DB::table('properties')->join('categories','categories.id','properties.category_id')
        ->where('properties.category_id',6)->orwhere('properties.category_id',13)
        ->where('properties.status','pending')->orderBy('properties.created_at',"Desc")     
        ->select('properties.*','categories.category_name')->get();

        $flats_and_mansions =DB::table('properties')->where('category_id',7)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $stores =DB::table('properties')->where('category_id',8)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $offices =DB::table('properties')->where('category_id',9)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $shops =DB::table('properties')->where('category_id',10)->where('status','pending')->orderBy('created_at',"Desc")->get();
        $properties_with_discount=DB::table('properties')->where('discount','!=',null)->get();
        return view('welcome',compact('get_all_the_property','hostels','get_rooms','houses','plots','apartments','flats_and_mansions','stores',
        'offices','shops','properties_with_discount'));
    }
}
