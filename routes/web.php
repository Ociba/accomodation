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
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperMarketController;
use App\Http\Controllers\ViewMoreItemsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AuthenticatedUserCartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
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

//Route::get('/', function () { return view('welcome');});
Route::get('/',[HomeController::Class,'frontPage']);
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
Route::get('/payment-methods',[PaymentController::Class,'getPaymentMethods']);
Route::get('/supermarket',[SuperMarketController::Class,'superMarket']);
Route::get('/get-supermarket-items/{item_id}',[ViewMoreItemsController::Class,'ViewSupermarketItems'])->name('More Supermarket Items');
Route::get('/selected-item/{item_id}',[CartController::Class,'ViewCart']);  
Route::get('/supermarket-account-creation',[CartController::Class,'createAccountForm']);
Route::get('/subscribe-now',[SubscriptionController::Class,'subscribeUsers']);
Route::post('/register-account',[CartController::Class,'createAccount']);
Route::get('/checkout',[CheckoutController::Class,'checkout']);
//Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');

Route::get('/update-cart/{items_id}',[CartController::Class,'updateCart'])->name('cart.update');
//Route::get('update-cart', [CartController::class, 'updateCart'])->name('cart.update');

 //for adding to cart
 Route::get('/products', [ProductController::class, 'productList'])->name('products.list');
 Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
 Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
 //Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
 Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
 Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
// Route::middleware(['auth:sanctum', 'verified'])->get('/admin-dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[DashboardController::Class, 'getDashboard']);
    Route::get('/category',[CategoryController::Class, 'getCategory'])->name('Category');
    Route::get('/create-category',[CategoryController::Class, 'validateCreateCategory']);
    Route::get('/edit-category/{id}',[CategoryController::Class, 'editCategory'])->name('Edit Category');
    Route::get('/update-category/{id}',[CategoryController::Class, 'updateCategory']);
    Route::get('/delete-category/{id}',[CategoryController::Class, 'deleteCategory'])->middleware('can:isAdmin');

    Route::get('/subscribers',[SubscriptionController::Class,'getSubscriptions'])->name('Subscribers');

    
    Route::get('/shopping',[AuthenticatedUserCartController::Class,'authenticatedUserCart']);
    Route::get('/item-details/{item_id}',[AuthenticatedUserCartController::Class,'viewSelectedItem']);
    Route::get('/view-shooping-list',[AuthenticatedUserCartController::Class,'shoppingList']);  
    Route::get('/save-my-cart/{item_id}',[AuthenticatedUserCartController::Class,'saveItemInfo']);
    //Route::get('update-quantity/{item_id}', [AuthenticatedUserCartController::class, 'updateQuantity'])->name('cart.update');
    Route::get('/delete-from-cart-list/{item_id}',[AuthenticatedUserCartController::Class,'deleteItem']);
    Route::get('/view-more-items/{item_id}',[AuthenticatedUserCartController::Class,'viewMore']);

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
    Route::get('/properties-available',[PropertyController::Class, 'getPropertyForAdmin'])->name('Properties Available');
    Route::get('/add-property-discount-form/{property_id}',[PropertyController::Class, 'addDiscountForm'])->name('Discount Form');
    Route::get('/add-discount/{property_id}',[PropertyController::Class, 'saveDiscount']); 
   
    
    Route::get('/supermarket-items',[SuperMarketController::Class,'superMarketItems'])->name('Supermarket Items');
    Route::get('/create-item-group',[SuperMarketController::Class,'validateitemCategory']);
    Route::post('/create-supermarket-item',[SuperMarketController::Class,'validatecreateSupermarketItem']);
    Route::get('/add-supermarket-item-discount/{item_id}',[SuperMarketController::Class,'addDiscount'])->name('Discount Form');
    Route::get('/save-supermarket-item-discount/{item_id}',[SuperMarketController::Class,'saveDiscount']);
    
   
    
    Route::get('/add-my-cart/{item_id}',[CartController::Class,'saveItemSelected']);
    Route::get('/view-cart',[CartController::Class,'viewMyShoppingCart']);  
    Route::get('/remove-from-cart-list/{items_id}',[CartController::Class,'removeItem']);

   

    Route::get('/all-client-info',[ClientController::Class,'getAdminClientInformation'])->name("Clients");
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
     Route::get('/pay-with-mtn',[PaymentController::Class, 'payWithMtn']);
     Route::get('/pay-with-airtel',[PaymentController::Class, 'payWithAirtel']);
});

