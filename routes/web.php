<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BrokerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\LandAndPlotsController;
use App\Http\Controllers\FlatsAndMansionsController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome');});
Route::post('/signup',[OwnerController::Class,'signUp']);
Route::get('/get-room',[RoomController::Class, 'getRooms'])->name('Rooms');
Route::get('/get-hostel',[HostelController::Class, 'getHostel']);
Route::get('/get-house',[HouseController::Class, 'getHouse']);
Route::get('/get-apartment',[ApartmentController::Class, 'getApartment']);
Route::get('/get-plots-and-land',[LandAndPlotsController::Class, 'getPlotsAndLand']);
Route::get('/get-flats-and-mansions',[FlatsAndMansionsController::Class,'getFlatsAndMansions']);
Route::get('/get-store',[StoreController::Class,'getStore']);
Route::get('/get-shop',[ShopController::Class,'getShop']);
Route::get('/get-office',[OfficeController::Class,'getOffice']);
Route::get('/contact',[ContactController::Class,'getContact']);
Route::get('/chosen-property/{property_id}',[PropertyController::Class, 'getSelectedProperty'])->name('Selected Property');
Route::get('/send-number/{property_id}',[ClientController::Class,'validateClientDetails']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/admin-dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[DashboardController::Class, 'getDashboard'])->name('Dashboard');
    Route::get('/category',[CategoryController::Class, 'getCategory'])->name('Category');
    Route::get('/create-category',[CategoryController::Class, 'validateCreateCategory']);
    Route::get('/edit-category/{id}',[CategoryController::Class, 'editCategory'])->name('Edit Category');
    Route::get('/update-category/{id}',[CategoryController::Class, 'updateCategory']);
    Route::get('/delete-category/{id}',[CategoryController::Class, 'deleteCategory'])->middleware('can:isAdmin');

    Route::get('/get-property-owners',[OwnerController::Class, 'getPropertyOwners'])->name('Property Owners');
    Route::post('/create-owner',[OwnerController::Class,'validatePropertyOwner']);
    Route::get('/delete-owner/{id}',[OwnerController::Class, 'deletePropertyOwner']);
    Route::get('/edit-owner/{id}',[OwnerController::Class,'editPropertyOwner'])->name('Edit Property Owner');
    Route::get('/update-owner/{id}',[OwnerController::Class, 'updatePropertyOwnerInfo']);

    Route::post('/create-property',[PropertyController::Class, 'validateProperty']);
    Route::get('/edit-property/{id}',[PropertyController::Class, 'editProperty'])->name('Edit Property');
    Route::get('/update-property/{id}',[PropertyController::Class, 'updateProperty']);
    Route::get('/mark-as-taken/{id}',[PropertyController::Class, 'updatePropertyStatus']);
    Route::get('/delete-property/{id}',[PropertyController::Class, 'deleteProperty']);
    Route::get('/taken-property',[PropertyController::Class, 'getPropertyTaken'])->name('Property Taken');
   
   


    
    Route::get('/allocate-broker/{client_id}',[ClientController::Class, 'addBrokerToClient'])->name('Allocate Broker');
    Route::get('/allocated-broker/{client_id}',[ClientController::Class, 'allocateBrokerToClient']);
    Route::get('/view-client/{client_id}',[ClientController::Class, 'viewClientsPropertyInfo'])->name('Property Details');

    Route::get('/get-broker',[BrokerController::Class, 'getBroker'])->name('Company Broker');
    Route::post('/create-broker',[BrokerController::Class, 'validateBroker']);
    Route::get('/delete-broker/{id}',[BrokerController::Class, 'deleteBroker']);
    Route::get('/edit-broker/{id}',[BrokerController::Class, 'editBroker'])->name('Edit Broker');
    Route::get('/update-broker/{id}',[BrokerController::Class, 'updateBrokerInfo']);
    Route::get('/suspend-broker/{id}',[BrokerController::Class, 'suspendBroker']);
    Route::get('/delete-broker/{id}',[BrokerController::Class, 'deleteBroker']);

    Route::get('/get-users',[UserController::Class,'getUser'])->name('Users');
    Route::get('/suspend-user/{id}',[UserController::Class, 'suspendBroker']);
    Route::get('/activate-user/{id}',[UserController::Class, 'activateUser']);
    Route::get('/edit-user/{id}',[UserController::Class, 'editUser'])->name('Edit User');
    Route::get('/update-user/{id}',[UserController::Class, 'updateUser']);
    Route::get('/delete-user/{id}',[UserController::Class, 'deleteUser']);
  
});

Route::middleware(['auth'])->group(function () {
    Route::get('/clients',[ClientController::Class, 'getClientInformation'])->name('Clients');
    Route::get('/logout',[AuthenticationController::Class, 'logoutUser']);
     Route::get('/taken-property',[PropertyController::Class, 'getPropertyTaken'])->name('Property Taken');
     Route::get('/property',[PropertyController::Class, 'getProperty'])->name('Property Available');
});

