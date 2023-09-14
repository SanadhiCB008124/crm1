<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stocks(){
        $products=Product::all();
        return view('stocks',compact('products'));
    }
}
