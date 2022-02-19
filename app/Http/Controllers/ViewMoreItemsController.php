<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperMarket;


class ViewMoreItemsController extends Controller
{
    /**
     * This function gets item for particular category
     */
    public function ViewSupermarketItems($item_id){
        $get_all_items =SuperMarket::join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->join('users','users.id','super_markets.created_by')
        ->where('super_markets.item_group_id',$item_id)
        ->select('super_markets.*','super_market_item_categories.item_category','users.name')->get();

        $get_supermarket_items =SuperMarket::where('discount',null)->where('status','active')->get(); 
        
        $supermarket_items_with_discount=SuperMarket::where('discount','!=',null)->get();
        return view('frontpages.all_supermarket_category_items', compact('get_all_items','get_supermarket_items','supermarket_items_with_discount'));
    }
}
