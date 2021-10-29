<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use DB;
use Auth;

class ClientController extends Controller
{
    /**
     * This function gets requests from the clients
     */
    protected function getCleintInformation(){
        $get_client_details =DB::table('clients')
        ->join('properties','clients.property_id','properties.id')
        ->select('properties.*','clients.*')
        ->get();
        return view('admin.client_details', compact('get_client_details'));
    }
    /** 
     * This function creates clients information
    */
    private function createClientDetaiils(){
        $client_obj =new Client;
        $client_obj ->phone_number  =request()->phone_number;
        $client_obj ->property_id   =request()->property_name;
        $client_obj ->client_name   =request()->client_name;
        $client_obj ->email         =request()->email;
        $client_obj->save();
        return redirect()->back()->with('msg','You have successfully requested for the accomadation');
    }
    /**
     * this function validates the clients information 
     */
    protected function validateClientDetails(){
        if(empty(request()->phone_number)){
            return redirect()->back()->withErrors('Enter phone number to continue');
        }elseif(empty(request()->client_name)){
            return redirect()->back()->withErrors('Enter Your name to contiue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter your Email to continue');
        }else{
            return $this->createClientDetaiils();
        }
    }
    /**
     * This function edits clients  information
     */
    protected function viewClientsPropertyInfo($client_id){
        $view_client_property_info =DB::table('clients')->where('id',$client_id)->get();
        return view('admin.client_property_info', compact('view_client_property_info'));
    }
    /**
     * This function allocate broker to client
     */
    protected function allocateBrokerToClient($client_id){
        Client::where('id',$client_id)->update(array(
            'broker_name' =>request()->broker_name,
            'contact'     =>request()->contact,
            'created_by'  =>Auth::user()->id,
        ));
        return redirect()->back()->with('msg', 'You have assigned'.request()->broker_name.'to'.request()->client_name.' successfully');
    }
    /**
     * This function add Client Broker Information
     */
    protected function addBrokerToClient($client_id){
        $add_broker_to_client =DB::table('clients')->where('id',$client_id)->get();
        return view('admin.add_broker_to_client', compact('add_broker_to_client'));
    }
    /**
     * This function updates the status on the client request
     */
    protected function updateClientStatus($client_id){
      Client::where('id', $client_id)->update(array('status'=>'done'));
      return redirect()->back()->with('msg','The client was taken to the property location');
    }
    /**
     * This function deletes the client request permanently
     */
    protected function deleteClientRequest($client_id){
        Client::where('id',$client_id)->delete();
        return redirect()->back()->with('msg','The client request has been deleted successfully');
    }
}
