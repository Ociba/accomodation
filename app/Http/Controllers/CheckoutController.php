<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperMarket;
use DB;

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
}
