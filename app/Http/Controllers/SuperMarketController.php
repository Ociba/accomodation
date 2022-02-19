<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\ItemCategoryRequestForm;
use App\Models\SuperMarketItemCategory;
use App\Models\SuperMarket;

class SuperMarketController extends Controller
{
    protected function superMarket(){
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

        return view('frontpages.supermarket',compact('phones','get_clothes','shoes','vegetables','get_all_the_supermarket_items','fruits','utensils','beddings',
                    'electronics','computers','bags','saloon_products','scholastic_materials','supermarket_items_with_discount','get_supermarket_items'));
    }
    /**
     * This function gets all the items of supermarket
     */
    public function superMarketItems(){
        $category =DB::table('super_market_item_categories')->select('id','item_category')->get();
        $get_items =SuperMarket::join('super_market_item_categories','super_market_item_categories.id','super_markets.item_group_id')
        ->join('users','users.id','super_markets.created_by')
        ->select('super_markets.*','super_market_item_categories.item_category','users.name')->get();
        return view('admin.supermarket_items', compact('category', 'get_items'));
    }
    /**
     * this function saves item category
     * */
    // protected function createItemCategory(ItemCategoryRequestForm $request){
    //     //save the validated model
    //     SuperMarketItemCategory::create($request->validated());
    //     //return back to the previous route
    //     return redirect()->back()->with('msg','Operation Successful');
    // }
    private function createItemCategory(){
        $object =new SuperMarketItemCategory;
        $object->item_category=request()->item_category;
        $object->save();
        return redirect()->back()->with('msg','Operation Successful');
    }
    /**
     * This function validates itemCategory
     */
    protected function validateitemCategory(){
        if(empty(request()->item_category)){
            return redirect()->back()->withErrors('Enter category to proceed');
        }else{
            return $this->createItemCategory();
        } 
    }
    /**
     * This function saves supermarket items
     */
    private function createSupermarketItem(){

        $super_market_photo = request()->photo;
        $super_market_photo_original_name = $super_market_photo->getClientOriginalName();
        $super_market_photo->move('super_market_photos/',$super_market_photo_original_name);

        $object =new SuperMarket;
        $object->item_group_id   =request()->item_group_id;
        $object->contact         ='0775401793';
        $object->item            =request()->item;
        $object->location        =request()->location;
        $object->description     =request()->description;
        $object->price           =request()->price;
        $object->photo           =$super_market_photo_original_name;
        $object->created_by       =auth()->user()->id;
        $object->save();
        return redirect()->back()->with('msg','Operation Successful');
    }
    protected function validatecreateSupermarketItem(){
        if(empty(request()->item_group_id)){
            return redirect()->back()->withErrors('Enter category to proceed');
        }elseif(empty(request()->location)){
            return redirect()->back()->withErrors('Enter Location to proceed');
        }elseif(empty(request()->item)){
        return redirect()->back()->withErrors('Enter Item to proceed');
        }elseif(empty(request()->description)){
            return redirect()->back()->withErrors('Enter Description to proceed');
        }elseif(empty(request()->photo)){
            return redirect()->back()->withErrors('Upload Photo to proceed');
        }else{
            return $this-> createSupermarketItem();
        }
    }
        /** 
     * This function gets form for adding discount
    */
    protected function addDiscount($item_id){
        $get_form_to_add_discount =SuperMarket::where('id',$item_id)->get();
        return view('admin.add_supermarket_item_discount', compact('get_form_to_add_discount'));
    }
    /**
     * This function creates discount
     */
    public function saveDiscount($item_id){
        SuperMarket::where('id',$item_id)->update(array(
            'discount'  =>request()->discount
        ));
        return redirect('/supermarket-items')->with('msg','Operations Successful');
    }
}
