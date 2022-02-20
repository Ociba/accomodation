<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperMarket;
use App\Models\User;
use App\Models\Cart;
use Hash;

class CartController extends Controller
{
    //
    public function ViewCart($item_id){
        $get_cart_item =SuperMarket::join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->join('users','users.id','super_markets.created_by')
        ->where('super_markets.id',$item_id)
        ->select('super_markets.*','super_market_item_categories.item_category','users.name')->get();
        //Supermarkets items slider
        $get_supermarket_items =SuperMarket::where('discount',null)->where('status','active')->get(); 
        return view('frontpages.cart', compact('get_cart_item','get_supermarket_items'));
    }
    /**
     * This function gets form for creating supermartket account
     */
    public function createAccountForm(){
     return view('frontpages.supermarket_account_form');
    }
    /**
     * This function creates account for supermarket user
     */
    private function supermarketAccount(){
        
        $supermarket_client_photo = request()->profile_photo_path;
        $supermarket_client_photo_original_name = $supermarket_client_photo->getClientOriginalName();
        $supermarket_client_photo->move('property_owner_photos/',$supermarket_client_photo_original_name);

        $supermarket_obj = new User;
        $supermarket_obj->email       = request()->email;
        $supermarket_obj->name        = request()->name;
        $supermarket_obj->contact     = request()->contact;
        $supermarket_obj->type        ='supermarket';
        $supermarket_obj->profile_photo_path =$supermarket_client_photo_original_name;
        $supermarket_obj->password    = Hash::make(request()->password);
        $supermarket_obj->save();
        return Redirect("/login")->with('msg','You have successfully created'. request()->name.' as property owner');
    }
    /** 
     * Ths function validates the property owner details
    */
    protected function createAccount(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(empty(request()->contact)){
            return redirect()->back()->withErrors('Enter Phone Number to continue');
        }elseif(empty(request()->profile_photo_path)){
            return redirect()->back()->withErrors('Enter Photo to continue');
        }elseif(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This property owner email is already taken');
        }else{
            if(request()->password == request()->password_confirmation){
                return $this->supermarketAccount();
            }else{
                return redirect()->back()->withErrors('Make sure the two passwords match');
            }
        }
    }
    /** 
     * This function saves to cart
    */
    protected function saveItemSelected($item_id){
        $supermarket_obj = new Cart;
        $supermarket_obj->item_id     = request()->item_id;
        $supermarket_obj->user_id     =auth()->user()->id;
        $supermarket_obj->save();
        return Redirect('/view-cart');
    }
    /**
     * This functions gets the cart list for the items selected
     */
    protected function viewMyShoppingCart(){

        $cart_details =Cart::join('super_markets','super_markets.id','carts.item_id')
        ->join('users','users.id','carts.user_id')
        ->where('carts.user_id',auth()->user()->id)
        ->select('super_markets.*','users.name','carts.created_at','carts.id','carts.quantity')
        ->get();

        $get_supermarket_items =SuperMarket::where('discount',null)->where('status','active')->get(); 


        $userId = auth()->user()->id;

        // for a specific user
        $total = \Cart::session($userId)->getTotal();
        //$total = \Cart::session($userId)->getTotal(); 
        return view('frontpages.my_cart_details', compact('get_supermarket_items','cart_details','total'));
        }
    /**
     * This function updates carts quantity
     */
      
    protected function updateSelectedItemsQuantity($items_id){
        //return request();
        Cart::where('id',$items_id)->update(array(
            'quantity'=>request()->quantity,
        ));
        return Redirect('/view-cart');
    
    }
    /** 
     * This function removes item from cart
    */
    protected function removeItem($items_id){
        Cart::where('id',$items_id)->delete();
        return Redirect('/view-cart');

    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
    }
}
