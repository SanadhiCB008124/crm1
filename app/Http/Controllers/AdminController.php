<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $customerCount = User::where('role_id', 2)->count();

        $totalRevenue = Order::sum('total_amount');


        $totalCOGS = OrderItem::join('products', 'order_items.product_slug', '=', 'products.slug')
            ->sum(DB::raw('order_items.quantity * products.unit_price'));


        // Calculate Profit Margin
        if($totalRevenue == 0 || $totalCOGS == 0)
            $profitMargin = 0;
        else
            // Profit Margin = (Total Revenue - Total COGS) / Total Revenue * 100
        $profitMargin = ($totalRevenue - $totalCOGS) / $totalRevenue * 100;

        $totalOrderCount= Order::count();


        return view('dashboard', [
            'customerCount' => $customerCount,
            'totalRevenue' => $totalRevenue,
            'totalCOGS' => $totalCOGS,
            'profitMargin' => $profitMargin,
            'totalOrderCount' => $totalOrderCount,
        ]);
    }
}
