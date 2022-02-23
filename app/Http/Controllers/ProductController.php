<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperMarket;

class ProductController extends Controller
{
    public function productList()
    {
        $products = SuperMarket::all();

        return view('products', compact('products'));
    }
}
