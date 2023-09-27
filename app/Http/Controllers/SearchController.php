<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function searchProduct(Request $request)
    {
        $searchTerm = $request->input('search');
        $categories = Category::all();
        $products = Product::query(); // Start with an empty query builder

        if (!empty($searchTerm)) {
            $products = $products->where(function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', "%$searchTerm%")
                    ->orWhere('size', 'LIKE', "%$searchTerm%")
                    ->orWhere('color_id', 'LIKE', "%$searchTerm%");
            });
        }

        $products = $products->get(); // Execute the query and get the results

        $view = !empty($searchTerm) ? 'dynamic-product-page' : 'welcome';

        return view($view, compact('products', 'categories'));
    }






}
