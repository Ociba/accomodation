<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperMarket;

class ProductController extends Controller
{
    public function productList()
    {
        $products = SuperMarket::where('discount',null)->where('status','active')->get();

        $supermarket_items_with_discount=SuperMarket::where('discount','!=',null)->get();

        return view('products', compact('products','supermarket_items_with_discount'));
    }
}
