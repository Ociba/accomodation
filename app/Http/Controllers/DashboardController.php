<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * This function gets admin dashboard
     */
    protected function getDashboard(){
        if(auth()->user()->type == 'admin'){
            return view('admin.dashboard');
        }elseif(auth()->user()->type == 'broker'){
            return redirect("/clients");
        }elseif(auth()->user()->type == 'supermarket'){
            //return redirect("/selected-item");
            return redirect('/shopping');
        }else{
            if(auth()->user()->type == 'property_owner' && (auth()->user()->amount != null)){
                return redirect('/property');
            }elseif(auth()->user()->type == 'property_owner' && (auth()->user()->payment_date == 'payment_date')){
                return redirect('/payment-methods');
            }else{
                return redirect('/payment-methods');
        }
    }
}
}