<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\SuperMarket;
use DB;
use App\Models\User;
use App\Models\Order;
use App\Models\Unitprice;
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
        return redirect('/login')->with('msg', 'You have successfully created property');
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
                'item_id'      =>$item->id,
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
        ->join('super_markets','super_markets.id','orders.item_id')
        ->select('users.*','orders.item_name','orders.quantity','orders.price','orders.id','orders.user_id','orders.status','orders.created_at','super_markets.photo')
        ->orderBy('orders.created_at','DESC')
        ->get();
        return view('admin.customers_orders',compact('get_all_orders'));
    }
      /**
     * This function gets orders from the custommers
     */
    protected function getCustomerOrdersInfo($order_id){
        $get_all_orders_info=DB::table('orders')->join('users','users.id','orders.user_id')
        ->join('super_markets','super_markets.id','orders.item_id')
        ->where('orders.status','active')
        ->where('orders.user_id',$order_id)
        ->select('users.*','orders.user_id','orders.item_name','orders.quantity','orders.price','orders.id','orders.created_at','super_markets.photo')
        ->get();
        return view('admin.customers_orders_info',compact('get_all_orders_info'));
    }
      /**
     * This function gets orders Details for Particular Person
     */
    protected function getCustomerOrdersSummary(){
        $get_all_orders_summary=DB::table('orders')->join('users','users.id','orders.user_id')
        ->orderBy('orders.created_at','DESC')
        ->select('users.*','orders.created_at','orders.user_id')
        ->distinct('name')->where('orders.status','active')->get();
        return view('admin.customers_orders_summary',compact('get_all_orders_summary'));
    }
      /**
     * This function gets orders Details for Particular Person
     */
    protected function printCustomerOrdersInfoNow($user_id){
        $print_orders_info=DB::table('orders')->join('users','users.id','orders.user_id')
        ->join('super_markets','super_markets.id','orders.item_id')
        ->where('orders.user_id',$user_id)
        ->select('users.*','orders.user_id','orders.item_name','orders.quantity','orders.price','orders.id','orders.created_at','super_markets.photo')
        ->limit(1) ->get();
        return view('admin.print_now',compact('print_orders_info'));
    }
    /**
     * This function saves the unit Price for customers order
     */
    protected function getUnitPrice($order_id){
        $quantity =Order::where('id',$order_id)->value('quantity');
        $price =Order::where('id',$order_id)->value('price');
        $total =$quantity * $price;


        $unit_price =new Unitprice;
        $unit_price->user_id =request()->user_id;
        $unit_price->total =$total;
        $unit_price->save();
        return redirect()->back()->with('msg','Operation Successful');
    }
   /**
    * This function marks order as delivered
    */
    protected function markOrderAsDelivered($order_id){
        Order::where('user_id',$order_id)->update(array(
            'status' =>'delivered'
        ));
        return redirect()->back()->with('msg','Operation Successful');
    }
     /**
    * This function marks order as delivered
    */
    protected function deleteOrder($order_id){
        Order::where('user_id',$order_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
