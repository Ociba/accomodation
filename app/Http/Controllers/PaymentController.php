<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class PaymentController extends Controller
{
    //
    protected function getPaymentMethods(){
        return view('frontpages.payment_options');
    }
    /**
     * This function pays with mtn mobile money
     */
    protected function payWithMtn(){
        $now = Carbon::now();
        $days_from_now = $now->addYear(1);
        User::where('id',auth()->user()->id)->update(array(
          'amount'        =>request()->amount,
          'payment_date' =>$days_from_now
        ));
        return redirect('/property')->with('msg','Operation successful');
    }
      /**
     * This function pays with mtn mobile money
     */
    protected function payWithAirtel(){
        $now = Carbon::now();
        $days_from_now = $now->addYear(1);

        User::where('id',auth()->user()->id)->update(array(
          'amount' =>request()->amount,
          'payment_date' =>$days_from_now
        ));
        return redirect('/property')->with('msg','Operation successful');
    }
}
