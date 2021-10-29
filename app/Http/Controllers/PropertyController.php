<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use DB;
use Auth;

class PropertyController extends Controller
{
    /**
     * This function fetches the property details getPropertyTaken
     */
    protected function getProperty(){
        $get_category =Category::select('category_name','id')->get();
        $get_property =DB::table('properties')
        ->join('users','properties.user_id','users.id')
        ->join('categories','properties.category_id','categories.id')
        ->select('properties.*','users.name','categories.category_name')
        ->where('status','pending')
        ->get();
        return view('admin.property', compact('get_property','get_category'));
    }
     /**
     * This function fetches the property  already takendetails 
     */
    protected function getPropertyTaken(){
        $get_property_taken =DB::table('properties')
        ->join('users','properties.user_id','users.id')
        ->join('categories','properties.category_id','categories.id')
        ->select('properties.*','users.name','categories.category_name')
        ->where('status','taken')
        ->get();
        return view('admin.taken_property', compact('get_property_taken'));
    }
    /**
     * This function creates property
     */
    private function createProperty(){
        $get_category_id= Category::where(\strtolower("category_name"), strtolower(request()->category_name))->value('id');

        $property_photo = request()->photo;
        $property_photo_original_name = $property_photo->getClientOriginalName();
        $property_photo->move('property_photos/',$property_photo_original_name);

        $property_obj =new Property;
        $property_obj ->category_id   =request()->category_id;
        $property_obj ->user_id       =Auth::user()->id;
        $property_obj ->property_size =request()->property_size;
        $property_obj ->bedroom       =request()->bedroom;
        $property_obj ->bathroom      =request()->bathroom;
        $property_obj ->garage        =request()->garage;
        $property_obj ->location      =request()->location;
        $property_obj ->description   =request()->description;
        $property_obj ->price         =request()->price;
        $property_obj ->photo         =$property_photo_original_name;
        $property_obj ->property_status =request()->property_status;
        $property_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created property');
    }
    /**
     * This function validates the property being created
     */
    protected function validateProperty(){
        if(empty(request()->category_id)){
            return redirect()->back()->withErrors('Enter category to proceed');
        }elseif(empty(request()->property_size)){
            return redirect()->back()->withErrors('Enter Property size to proceed');
        }elseif(empty(request()->location)){
            return redirect()->back()->withErrors('Enter Location to proceed');
        }elseif(empty(request()->description)){
            return redirect()->back()->withErrors('Enter Description to proceed');
        }elseif(empty(request()->price)){
            return redirect()->back()->withErrors('Enter Price to proceed');
        }elseif(empty(request()->photo)){
            return redirect()->back()->withErrors('Upload Photo to proceed');
        }else{
            return $this->createProperty();
        }
    }
    /**
     * This function edits the property
     */
    protected function editProperty($property_id){
       
        $edit_property=DB::table('properties')->where('id', $property_id)->get();
        return view('admin.edit_property', compact('edit_property'));
    }
    /**
     * This function updates the property informtion
     */
    protected function updateProperty($property_id){
        Property::where('id', $property_id)->update(array(
            'property_size'    =>request()->property_size,
            'bedroom'          =>request()->bedroom,
            'bathroom'         =>request()->bathroom,
            'garage'           =>request()->garage,
            'location'         =>request()->location,
            'description'      =>request()->description,
            'price'            =>request()->price,
            'user_id'       =>Auth::user()->id
         ));
         return redirect()->back()->with('msg','Updates done successful');
    }
    /**
     * This function deletes property softly
     */
    protected function updatePropertyStatus($property_id){
        Property::where('id',$property_id)->update(array('status'=>'taken'));
        return redirect()->back()->with('msg', 'Property has been taken');

    }
    /**
     * This function deletes the property permanently
     */
    protected function deleteProperty($property_id){
        Property::where('id',$property_id)->delete();
        return redirect()->back()->with('msg', 'Property has been deleted successfully');
    }
}
