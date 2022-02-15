<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Resources\ClientRequests;
use App\Http\Controllers\PropertyController;
use App\Http\Resources\AccomodationTypeResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
}); 
Route::get('/client-requests',[ClientController::Class,'getClientRequest']);
Route::post('/request-for-accomodation',[ClientController::Class,'saveClientRequest']);
Route::get('/get-accomodation-property',[PropertyController::Class,'getPropertyDetails']);
