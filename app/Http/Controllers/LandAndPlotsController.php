<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandAndPlotsController extends Controller
{
    /**
     * This function gets plots and land available for sale
     */
    protected function getPlotsAndLand(){
        return view('frontpages.land_and_plots');
    }
}
