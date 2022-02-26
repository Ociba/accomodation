<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperMarket;
use DB;
use App\Models\User;
use App\Models\Order;
use Hash;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        $get_supermarket_items =SuperMarket::where('discount',null)->where('status','active')->get(); 
        $get_clothes =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',1)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();


        $get_all_the_supermarket_items =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();
         
        $phones =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',3)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();

        $shoes =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',2)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();

        $fruits =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',4)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();

        $vegetables=DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',5)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();

        $utensils =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',6)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();

        $beddings =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',7)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();

        $electronics =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',8)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();

        $computers =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',9)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();

        $bags =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',10)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();

        $saloon_products =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',11)
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();

        $scholastic_materials =DB::table('super_markets')->join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->where('super_markets.item_group_id',12)    
        ->where('super_markets.status','active')->orderBy('super_markets.created_at',"Desc")
        ->select('super_markets.*','super_market_item_categories.item_category')->get();
        return view('checkout', compact('cartItems','get_supermarket_items','get_clothes','get_all_the_supermarket_items',
                      'phones','shoes','fruits','vegetables','utensils','beddings','electronics','computers','bags',
                      'saloon_products','scholastic_materials'));
    }

    /**
     * This function creates Customers account before making an order
     */
    protected function createAccount(){

        $customer_info_obj =new User;
        $customer_info_obj ->name             =request()->name;
        $customer_info_obj ->email            =request()->email;
        $customer_info_obj ->contact          =request()->contact;
        $customer_info_obj ->address          =request()->address;
        $customer_info_obj ->town             =request()->town;
        $customer_info_obj ->division         =request()->division;
        $customer_info_obj ->street           =request()->street;
        $customer_info_obj ->plot_number      =request()->plot_number;
        $customer_info_obj ->password         =Hash::make(request()->password);
        $customer_info_obj->type              = 'supermarket';
        $customer_info_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created property');
    }
    /**
     * This functions gets order page
     */
    protected function placeOrderNow(){
        $cartItems = \Cart::getContent();
        return view('place_order', compact('cartItems'));
    }
    /**
     * This function creates checkout order
     */
    public function createCheckoutOrder(){
        $cartItems = \Cart::getContent();
        foreach($cartItems as $item){
            Order::create([
                'user_id'      =>auth()->user()->id,
                'item_id'      =>$item->item_id,
                'item_name'	   =>$item->name,
                'quantity'     =>$item->quantity,
                'price'        =>$item->price,
            ]);
        }
    return redirect()->back()->with('msg', 'You have successfully created property');
    }
    /**
     * This function gets orders from the custommers
     */
    protected function getCustomerOrders(){
        $get_all_orders=DB::table('orders')->join('users','users.id','orders.user_id')
        ->select('users.*','orders.item_name','orders.quantity','orders.price','orders.id','orders.created_at')
        ->orderBy('orders.created_at','DESC')
        ->simplePaginate(10);
        return view('admin.customers_orders',compact('get_all_orders'));
    }
}
