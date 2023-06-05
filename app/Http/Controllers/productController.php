<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function men()
    {
        $menProducts = Product::where('catagory_id', 1)->get();

        return view('men-products', compact('menProducts'));
    }

    public function women()
    {
        $womenProducts = Product::where('catagory_id', 2)->get();

        return view('women-products', compact('womenProducts'));
    }

    public function topSelling()
    {
        $topSellingProducts = Product::where('catagory_id', 3)->get();

        return view('top-selling-products', compact('topSellingProducts'));
    }
}
