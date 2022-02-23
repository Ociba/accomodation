<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\SuperMarket;
use App\Models\Product;
use DB;

class AuthenticatedUserCartController extends Controller
{
      //
      public function authenticatedUserCart(){
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
    
            $supermarket_items_with_discount=SuperMarket::where('discount','!=',null)->get();
            //supermarket items
            $get_supermarket_items =SuperMarket::where('discount',null)->where('status','active')->get(); 
    
            return view('frontpages.authenticated-supermarket',compact('phones','get_clothes','shoes','vegetables','get_all_the_supermarket_items','fruits','utensils','beddings',
                        'electronics','computers','bags','saloon_products','scholastic_materials','supermarket_items_with_discount','get_supermarket_items'));
        }
        /**
         * This function gets the details of the item selected
         */
        public function viewSelectedItem($item_id){
            $get_cart_item =SuperMarket::join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
            ->join('users','users.id','super_markets.created_by')
            ->where('super_markets.id',$item_id)
            ->select('super_markets.*','super_market_item_categories.item_category','users.name')->get();
            //Supermarkets items slider
            $get_supermarket_items =SuperMarket::where('discount',null)->where('status','active')->get(); 
            return view('frontpages.item_selected', compact('get_cart_item','get_supermarket_items')); 
        }
         /**
     * This functions gets the cart list for the items selected
        */
        protected function shoppingList(){

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
        return view('frontpages.shopping_list', compact('get_supermarket_items','cart_details','total'));
        }
 
    /** 
     * This function saves to cart
    */
    protected function saveItemInfo($item_id){
        $supermarket_obj = new Cart;
        $supermarket_obj->item_id     = request()->item_id;
        $supermarket_obj->user_id     =auth()->user()->id;
        $supermarket_obj->save();
        return Redirect('/view-shooping-list');
    }
    // public function saveItemInfo(Product $product)
    // {
    //     \Cart::add([
    //         'id' => $product->id,
    //         'name' => $product->name,
    //         'price' => $product->price,
    //         'quantity' => $product->quantity,
    //         'attributes' => array(
    //             'image' => $product->image,
    //             'associatedModel' => $product
    //         )
    //     ]);
    //     return Redirect('/view-shooping-list');
    // }
    /**
     * This function updates carts quantity
     */
      
    protected function updateQuantity($items_id){
        //return request();
        Cart::where('id',$items_id)->update(array(
            'quantity'=>request()->quantity,
        ));
        return Redirect('/view-shooping-list');
    
    }
    /** 
     * This function removes item from cart
    */
    protected function deleteItem($items_id){
        Cart::where('id',$items_id)->delete();
        return Redirect('/view-shooping-list');

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
    /**
     * This function gets item for particular category
     */
    public function viewMore($item_id){
        $get_all_items =SuperMarket::join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->join('users','users.id','super_markets.created_by')
        ->where('super_markets.item_group_id',$item_id)
        ->select('super_markets.*','super_market_item_categories.item_category','users.name')->get();

        $get_supermarket_items =SuperMarket::where('discount',null)->where('status','active')->get(); 
        
        $supermarket_items_with_discount=SuperMarket::where('discount','!=',null)->get();
        return view('frontpages.category', compact('get_all_items','get_supermarket_items','supermarket_items_with_discount'));
}
}
