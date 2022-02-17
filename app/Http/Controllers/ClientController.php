<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Broker;
use App\Http\Resources\ClientRequests;
use DB;
use Auth;

class ClientController extends Controller
{
    /**
     * This function gets requests from the clients
     */
    protected function getClientInformation(){
        $get_client_details =DB::table('clients')->join('properties','clients.property_id','properties.id')
        //->where('properties.id','clients.property_id')
        ->where('properties.user_id',auth()->user()->id)
        ->select('clients.*','properties.photo','clients.created_at')
        ->get();
        return view('admin.client_details', compact('get_client_details'));
    }
     /**
     * This function gets requests from the clients for admin
     */
    protected function getAdminClientInformation(){
        $get_client_details =DB::table('clients')->join('properties','clients.property_id','properties.id')
        ->select('clients.*','properties.photo','properties.location')
        ->get();
        return view('admin.admin_client_details', compact('get_client_details'));
    }
    /** 
     * This function creates clients information
    */
    private function createClientDetaiils(){
        $client_obj =new Client;
        $client_obj ->phone_number  =request()->phone_number;
        $client_obj ->property_id   =request()->property_id;
        $client_obj ->client_name   =request()->client_name;
        $client_obj->save();
        return redirect()->back()->with('msg','Successfully,Our Agent will Call you Soon');
    }
    /**
     * this function validates the clients information 
     */
    protected function validateClientDetails(){
        if(empty(request()->phone_number)){
            return redirect()->back()->withErrors('Enter phone number to continue');
        }else{
            return $this->createClientDetaiils();
        }
    }
    /**
     * This function edits clients  information
     */
    protected function viewClientsPropertyInfo($client_id){
        $view_client_property_info =DB::table('clients')
        ->join('properties','clients.property_id','properties.id')
        ->join('brokers','clients.broker_id','brokers.id')
        ->where('clients.id',$client_id)
        ->select('clients.*','properties.*','brokers.name','brokers.contact_number')->get();
        return view('admin.client_property_info', compact('view_client_property_info'));
    }
    /**
     * This function allocate broker to client
     */
    protected function allocateBrokerToClient($client_id){
        Client::where('id',$client_id)->update(array(
            'broker_id'   =>request()->broker_id,
            'status'      =>'allocated',
            'allocated_by'  =>Auth::user()->id,
        ));
        //This function updates the brokers status
        Broker::where('id',$client_id)->update(array(
            'status'   =>'allocated',
        ));
        return redirect()->back()->with('msg', 'You have assigned'.request()->broker_name.'to'.request()->client_name.' successfully');
    }
    /**
     * This function add Client Broker Information
     */
    protected function addBrokerToClient($client_id){
        $get_avalable_broker =DB::table('brokers')->where('status','available')->select('id','name')->get();
        $add_broker_to_client =DB::table('clients')->where('id',$client_id)->get();
        return view('admin.add_broker_to_client', compact('add_broker_to_client','get_avalable_broker'));
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
    //This function return api for client request
    public function getClientRequest(){
        $get_client_request = ClientRequests::collection(Client::get());
        return response()->json(['data'=>$get_client_request]);
    }

      /** 
     * This function creates clients information from api
    */
    private function saveClientRequest(){
        $client_obj =new Client;
        $client_obj ->phone_number  =request()->phone_number;
        $client_obj ->property_id   =request()->property_id;
        $client_obj ->client_name   =request()->client_name;
        $client_obj->save();
        return redirect()->back()->with('msg','Successfully,Our Agent will Call you Soon');
    }
}
