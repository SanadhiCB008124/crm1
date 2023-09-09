<?php

namespace App\Http\Controllers;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;

use App\Models\Size;
use Illuminate\Http\Request;


class productController extends Controller
{
    public function showProductsByCategory($category_id)
    {
        $customerId = auth()->user()->id;
        $colors=Color::all();
        $size=Size::all();


        // Retrieve cart items for the user
        $cartItems = CartItem::where('user_id', $customerId)->get();
        $category = Category::find($category_id);
        $categories=Category::all();
        $products = Product::with('category', 'color','size')->where('category_id', $category_id)->get();


        return view('dynamic-product-page', compact('products', 'category','categories','cartItems','colors','size'));
    }






}
