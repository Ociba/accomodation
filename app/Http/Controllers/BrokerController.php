<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Broker;
use App\Models\User;
use DB;
use Auth;
use Hash;

class BrokerController extends Controller
{
    /**
     * This function fetches brokers details
     */
    protected function getBroker(){
        $get_broker =DB::table('brokers')->join('users','users.id','brokers.created_by')->select('brokers.*','users.name')->get();
        return view('admin.broker',compact('get_broker'));
    }
     /** 
     * This function creates broker information
     * saves credentials to users at the same time
    */
    private function createBroker(){
        $broker_photo = request()->profile_photo_path;
        $broker_photo_original_name = $broker_photo->getClientOriginalName();
        $broker_photo->move('broker_photos/',$broker_photo_original_name);

        $broker_obj =new Broker;
        $broker_obj ->name                 =request()->name;
        $broker_obj ->email                =request()->email;
        $broker_obj ->contact_number         =request()->contact_number;
        $broker_obj ->current_location     =request()->current_location;
        $broker_obj ->profile_photo_path   =$broker_photo_original_name;
        $broker_obj ->created_by           =Auth::user()->id;
        $broker_obj ->save();
        
        $this->createBrokerAccount();
        return redirect()->back()->with('msg','You have successfully created'. request()->name.' as Broker');
    }
     /**
     * this function creates broker user account
     */
    private function createBrokerAccount(){
        $user_obj = new User;
        $user_obj->email              = request()->email;
        $user_obj->name               = request()->name;
        $user_obj->type               ="broker";
       // $user_obj->profile_photo_path =$this->saveUsersImage();
        $user_obj->password    = Hash::make(request()->password);
        $user_obj->save();
    }
    /**
     * This function stores users profile images
     */
    private function saveUsersImage(){
        $user_photo = request()->profile_photo_path;
        $user_photo_original_name = $user_photo->getClientOriginalName();
        $user_photo->move('broker_photos/',$user_photo_original_name);
    }
    /** 
     * Ths function validates the broker details
    */
    protected function validateBroker(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(empty(request()->contact_number)){
            return redirect()->back()->withErrors('Enter Phone Number to continue');
        }elseif(empty(request()->current_location)){
            return redirect()->back()->withErrors('Enter Location to continue');
        }elseif(empty(request()->profile_photo_path)){
            return redirect()->back()->withErrors('Enter Photo to continue');
        }elseif(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This property Broker email is already taken');
        }else{
            if(request()->password == request()->password_confirmation){
                return $this->createBroker();
            }else{
                return redirect()->back()->withErrors('Make sure the two passwords match');
            }
        }
    }
      /**
     * This function edits broker information
     */
    protected function editBroker($broker_id){
        $get_broker_info =DB::table('brokers')->where('id',$broker_id)->get();
        return view('admin.edit_broker', compact('get_broker_info'));
       }
       /**
        * This function updates Broker information
        */
       protected function updateBrokerInfo($broker_id){
           Broker::where('id',$broker_id)->update(array(
               'name'              =>request()->name,
               'email'             =>request()->email,
               'current_location'  =>request()->current_location,
               'contact_number'    =>request()->contact_number,
               'created_by'=>Auth::user()->id
           ));
           return redirect()->back()->with('msg', 'You have successfully updated '. request()->name .' Information');
       }
        /**
        * This function suspends the Broker 
        */
        protected function suspendBroker($broker_id){
            User::where('id',$broker_id)->update(array('status'=>'suspended'));
            return redirect()->back()->with('msg', 'You have Successfully suspended this Property Broker');
        }
       /**
        * This function deletes the Broker Permanently
        */
       protected function deleteBroker($broker_id){
           Broker::where('id',$broker_id)->delete();
           return redirect()->back()->with('msg', 'You have Successfully deleted this Property Broker');
       }
}
