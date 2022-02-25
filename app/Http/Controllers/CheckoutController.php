<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperMarket;
use DB;
use App\Models\CustomerInfor;
use App\Models\Order;

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
     * This function creates checkout order
     */
    public function createCheckoutOrder(){

        $customer_info_obj =new CustomerInfor;
        $customer_info_obj ->first_name       =request()->first_name;
        $customer_info_obj ->last_name        =request()->last_name;
        $customer_info_obj ->email            =request()->email;
        $customer_info_obj ->phone_number     =request()->phone_number;
        $customer_info_obj ->address          =request()->address;
        $customer_info_obj ->division         =request()->division;
        $customer_info_obj ->street           =request()->street;
        $customer_info_obj ->plot_number      =request()->plot_number;
        $customer_info_obj ->save();

        // $image_photo = request()->image;
        // $image_photo_original_name = $image_photo->getClientOriginalName();
        // $image_photo->move('order_item_images/',$image_photo_original_name);

        $order_obj =new Order;
        $order_obj->phone_number =request()->phone_number;
        $order_obj->item_id      =request()->item_id;
        $order_obj->name	     =request()->name;
        $order_obj->quantity     =request()->quantity;
       // $order_obj->image        =$image_photo_original_name;
        $order_obj->save();
        return redirect()->back()->with('msg', 'You have successfully created property');
    }
}
