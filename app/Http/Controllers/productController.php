<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;


class productController extends Controller
{
    public function showProductsByCategory($category_id)
    {
        $category = Category::find($category_id);
        $categories=Category::all();
        $products = Product::with('category')->where('category_id', $category_id)->get();

        return view('dynamic-product-page', compact('products', 'category','categories'));
    }






}
