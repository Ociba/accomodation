<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    /**
     * This function fetches all users
     */
    protected function getUser(){
        $get_users =DB::table('users')->get();
        return view('admin.users', compact('get_users'));
    }
     /**
        * This function suspends the User 
        */
        protected function suspendBroker($user_id){
            User::where('id',$user_id)->update(array('status'=>'suspended'));
            return redirect()->back()->with('msg', 'You have Successfully suspended this User');
        }
    /** 
     * This function ctivates suspended User
    */
    protected function activateUser($user_id){
        User::where('id',$user_id)->update(array('status'=>'active'));
        return redirect()->back()->with('msg', 'You have Successfully activated '.request()->name.'');
    }
    /**
     * This function deletes users permanently
     */
    protected function deleteUser($user_id){
        User::where('id',$user_id)->delete();
        return redirect()->back()->with('msg', 'You have Successfully deleted this User');
    }
}
