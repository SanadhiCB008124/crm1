<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\PreDec;

class HomeController extends Controller
{
    public function index()
    {
        $role_id = Auth::user()->role_id;

        if ($role_id == 0) {

            $customerCount = User::where('role_id', 2)->count();

            $totalRevenue = Order::sum('total_amount');


            $totalCOGS = OrderItem::join('products', 'order_items.product_slug', '=', 'products.slug')
                ->sum(DB::raw('order_items.quantity * products.unit_price'));


            // Calculate Profit Margin
            $profitMargin = ($totalRevenue - $totalCOGS) / $totalRevenue * 100;

            return redirect('/dashboard');


            return view('dashboard', compact('customerCount', 'totalRevenue', 'totalCOGS', 'profitMargin',));
        } else {

            return redirect('/');
//            $categories = Category::all();
//            $products=Product::all();
//            if(auth()->user()){
//                $cartItems = CartItem::where('user_id', auth()->user()->id)->get();
//            }
//            return view('welcome', [
//                'categories' => $categories,
//                'products' => $products,
//                'cartItems' => $cartItems ?? null
//            ]);
        }
    }


}
