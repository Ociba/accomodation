<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function subscribeUsers(){
        $subscribs_obj =new Subscription;
        $subscribs_obj ->emails =request()->emails;
        $subscribs_obj->save();
        return Redirect()->back();
    }
    /**
     * This function gets subscriptions
     */
    protected function getSubscriptions(){
        $get_subscriptions =Subscription::orderBy('created_at')->get();
        return view('admin.subscribers',compact('get_subscriptions'));
    }
    /**
     * This function deletes subscriptions emails permanently
     */
    protected function deleteSubscription($subscriber_id){
        Subscription::where('id',$subscriber_id)->delete();
        return Redirect()->back()->with('msg','Operation Successfull');
    }
}
