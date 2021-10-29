<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * This function gets admin dashboard
     */
    protected function getDashboard(){
        return view('admin.dashboard');
    }
}
