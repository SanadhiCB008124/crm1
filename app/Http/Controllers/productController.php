<?php

namespace App\Http\Controllers;

use App\Jobs\ProductViews;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;

use App\Models\Size;
use Illuminate\Http\Request;


class productController extends Controller
{
    public function showProductsByCategory($category_id, Request $request)
    {
//        if(auth()->check()){
//            $customerId = auth()->user()->id;
//            $cartItems = CartItem::where('user_id', $customerId)->get();
//        }

        $colors = Color::all();
        $sizes = Size::all();


        $category = Category::find($category_id);
        $categories = Category::all();
        $products = Product::with('category', 'color', 'size')->where('category_id', $category_id)->get();


        return view('dynamic-product-page', [
            'products' => $products,
            'category' => $category,
            'categories' => $categories,
//            'cartItems' => $cartItems ?? null,
            'colors' => $colors,
            'sizes' => $sizes
        ]);
    }

    public function filter(Request $request)
    {

        $categoryId = $request->input('category_id');
        $colorId = $request->input('color_id');
        $sizeId = $request->input('size_id');
        $categories = Category::all();
        $customerId = auth()->user()->id;
        $colors = Color::all();
        $sizes = Size::all();


        $cartItems = CartItem::where('user_id', $customerId)->get();


        // Query the products table based on the filter criteria
        $filteredProducts = Product::query()
            ->when($categoryId, function ($query) use ($categoryId) {
                return $query->where('category_id', $categoryId);
            })
            ->when($colorId, function ($query) use ($colorId) {
                return $query->where('color_id', $colorId);
            })
            ->when($sizeId, function ($query) use ($sizeId) {
                return $query->where('size_id', $sizeId);
            })
            ->get();


        return view('filter-products', compact('filteredProducts', 'categories', 'colors', 'sizes', 'cartItems'));
    }

    public function productDescription($productSlug)
    {
        $product = Product::where('slug', $productSlug)->first();

        ProductViews::dispatch($product);
        $sizes = Size::all();
        return view('product-description', compact('sizes', 'product'));
    }


}
