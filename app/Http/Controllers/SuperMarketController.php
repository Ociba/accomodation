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
        $get_rooms =DB::table('properties')->join('categories','categories.id','properties.category_id')
        ->where('properties.category_id',1)->orwhere('properties.category_id',2)
        ->where('properties.status','pending')->orderBy('properties.created_at',"Desc")
        ->select('properties.*','categories.category_name')->get();

        $get_all_the_property =DB::table('properties')->join('categories','categories.id','properties.category_id')
        ->where('status','pending')->orderBy('properties.created_at',"Desc")
        ->select('properties.*','categories.category_name')->get();
         
        $hostels =DB::table('properties')->where('category_id',3)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $houses =DB::table('properties')->where('category_id',4)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $apartments =DB::table('properties')->where('category_id',5)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $plots=DB::table('properties')->join('categories','categories.id','properties.category_id')
        ->where('properties.category_id',6)->orwhere('properties.category_id',13)
        ->where('properties.status','pending')->orderBy('properties.created_at',"Desc")     
        ->select('properties.*','categories.category_name')->get();

        $flats_and_mansions =DB::table('properties')->where('category_id',7)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $stores =DB::table('properties')->where('category_id',8)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $offices =DB::table('properties')->where('category_id',9)->where('status','pending')->orderBy('created_at',"Desc")->get();

        $shops =DB::table('properties')->where('category_id',10)->where('status','pending')->orderBy('created_at',"Desc")->get();
        $properties_with_discount=DB::table('properties')->where('discount','!=',null)->get();
        return view('frontpages.supermarket',compact('hostels','get_rooms','houses','plots','get_all_the_property','apartments','flats_and_mansions','stores',
                    'offices','shops','properties_with_discount'));
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
}
