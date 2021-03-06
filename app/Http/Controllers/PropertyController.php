<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use App\Http\Resources\AccomodationTypeResource;
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
        ->where('properties.user_id',auth()->user()->id)
        ->select('properties.*','users.name','categories.category_name')
        ->where('properties.status','pending')->orderBy('properties.created_at',"Desc")
        ->get();
        return view('admin.property', compact('get_property','get_category'));
    }
    /**
     * This function gets property for admin
     */
    protected function getPropertyForAdmin(){
        $get_category =Category::select('category_name','id')->get();
        $get_property =DB::table('properties')
        ->join('users','properties.user_id','users.id')
        ->join('categories','properties.category_id','categories.id')
        ->select('properties.*','users.name','users.payment_date','categories.category_name')
        ->where('properties.status','pending')->orderBy('properties.created_at',"Desc")
        ->get();
        return view('admin.properties', compact('get_property','get_category'));
    }
     /**
     * This function fetches the property  already takendetails 
     */
    protected function getPropertyTaken(){
        $get_property_taken =DB::table('properties')
        ->join('users','properties.user_id','users.id')
        ->join('categories','properties.category_id','categories.id')
        ->select('properties.*','users.name','categories.category_name')
        ->where('properties.user_id',auth()->user()->id)
        ->where('properties.status','taken')
        ->get();
        return view('admin.taken_property', compact('get_property_taken'));
    }
    /**
     * This function fetches all the property  already taken details 
     */
    protected function getAllropertyTaken(){
        $get_all_property_taken =DB::table('properties')
        ->join('users','properties.user_id','users.id')
        ->join('categories','properties.category_id','categories.id')
        ->select('properties.*','users.name','categories.category_name')
        ->where('properties.status','taken')
        ->get();
        return view('admin.all_taken_property', compact('get_all_property_taken'));
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
    /** 
     * This function gets the property seleted by client
    */
    protected function getSelectedProperty($property_id){
        $get_property =DB::table('properties')->where('id',$property_id)->get();
        return view('frontpages.chosen_property', compact('get_property'));
    }
    //This function returns accomodation property type
    public function getPropertyDetails(){
        $get_property =AccomodationTypeResource::collection(Property:: join('users','properties.user_id','users.id')
        ->join('categories','properties.category_id','categories.id')
        ->select('properties.*','users.name','categories.category_name')
        ->where('properties.status','pending')->get());
        return response()->json(['data'=>$get_property]);
    }
    /** 
     * This function gets form for adding discount
    */
    protected function addDiscountForm($property_id){
        $get_form =Property::where('id',$property_id)->get();
        return view('admin.add_discount', compact('get_form'));
    }
    /**
     * This function creates discount
     */
    public function saveDiscount($property_id){
        Property::where('id',$property_id)->update(array(
            'discount'  =>request()->discount
        ));
        return redirect('/property')->with('msg','Operations Successful');
    }
}
