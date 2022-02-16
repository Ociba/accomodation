<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use DB;
use Auth;
use Hash;
use App\Models\User;

class OwnerController extends Controller
{
    /** 
     * This function fetches the property owners information
    */
    protected function getPropertyOwners(){
        $get_property_owner =DB::table('owners')->get();
        return view('admin.property_owner', compact('get_property_owner'));
    }
    /** 
     * This function creates property owners information
     * saves credentials to users at the same time
    */
    private function createPropertyOwner(){
        $property_owner_photo = request()->profile_photo_path;
        $property_owner_photo_original_name = $property_owner_photo->getClientOriginalName();
        $property_owner_photo->move('property_owner_photos/',$property_owner_photo_original_name);

        $property_owner_obj =new Owner;
        $property_owner_obj ->name         =request()->name;
        $property_owner_obj ->email        =request()->email;
        $property_owner_obj ->phone_number =request()->phone_number;
        $property_owner_obj ->location     =request()->location;
        $property_owner_obj ->profile_photo_path        =$property_owner_photo_original_name;
        //$property_owner_obj ->created_by   =Auth::user()->id;
        $property_owner_obj ->save();
        
        $this->createPropertyOwnerAccount();
        return Redirect("/login")->with('msg','You have successfully created'. request()->name.' as property owner');
    }
     /**
     * this function creates the property owner user account
     */
    private function createPropertyOwnerAccount(){

        $property_user_obj = new User;
        $property_user_obj->email       = request()->email;
        $property_user_obj->name        = request()->name;
        $property_user_obj->type        ='property_owner';
        //$property_user_obj->profile_photo_path =$property_user_photo_original_name;
        $property_user_obj->password    = Hash::make(request()->password);
        $property_user_obj->save();
    }
    /** 
     * Ths function validates the property owner details
    */
    protected function validatePropertyOwner(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(empty(request()->phone_number)){
            return redirect()->back()->withErrors('Enter Phone Number to continue');
        }elseif(empty(request()->location)){
            return redirect()->back()->withErrors('Enter Location to continue');
        }elseif(empty(request()->profile_photo_path)){
            return redirect()->back()->withErrors('Enter Photo to continue');
        }elseif(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This property owner email is already taken');
        }else{
            if(request()->password == request()->password_confirmation){
                return $this->createPropertyOwner();
            }else{
                return redirect()->back()->withErrors('Make sure the two passwords match');
            }
        }
    }
    /**
     * This function edits property owner information
     */
    protected function editPropertyOwner($property_owner_id){
     $get_property_owner_info =DB::table('owners')->where('id',$property_owner_id)->get();
     return view('admin.edit_property_owner', compact('get_property_owner_info'));
    }
    /**
     * This function updates property owner information
     */
    protected function updatePropertyOwnerInfo($property_owner_id){
        Owner::where('id',$property_owner_id)->update(array(
            'name'         =>request()->name,
            'email'        =>request()->email,
            'location'     =>request()->location,
            'phone_number' =>request()->phone_number,
            'created_by'   =>Auth::user()->id
        ));
        return redirect()->back()->with('msg', 'You have successfully updated '. request()->name .' Information');
    }
    /**
     * This function deletes the property owner softly
     */
    protected function deletePropertyOwner($property_owner_id){
        Owner::where('id',$property_owner_id)->delete();
        return redirect()->back()->with('msg', 'You have Successfully deleted this Property Owner');
    }
    //This function gets form for property owner to create an account
    protected function signUp(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(empty(request()->phone_number)){
            return redirect()->back()->withErrors('Enter Phone Number to continue');
        }elseif(empty(request()->location)){
            return redirect()->back()->withErrors('Enter Location to continue');
        }elseif(empty(request()->profile_photo_path)){
            return redirect()->back()->withErrors('Enter Photo to continue');
        }elseif(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This property owner email is already taken');
        }else{
            if(request()->password == request()->password_confirmation){
                return $this->createPropertyOwner();
            }else{
                return redirect()->back()->withErrors('Make sure the two passwords match');
            }
        }
    }
}
