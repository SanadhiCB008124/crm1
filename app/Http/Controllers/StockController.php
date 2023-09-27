<?php

namespace App\Http\Controllers;

use App\Events\LowStock;
use App\Models\OrderItem;
use App\Models\Product;
use App\Notifications\LowStockNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function stocks(){


        $products=Product::all();

        $totalCOGS = OrderItem::join('products', 'order_items.product_slug', '=', 'products.slug')
            ->sum(DB::raw('order_items.quantity * products.unit_price'));


        $startDate = now()->subMonth()->startOfMonth()->format('Y-m-d');
        $endDate = now()->subMonth()->endOfMonth()->format('Y-m-d');

        // Calculate the value of inventory at the beginning of the period
        $inventoryStart = Product::sum(DB::raw('unit_price * stocks'));

        // Calculate the value of inventory at the end of the period
        $inventoryEnd = Product::with('orderItems')->whereHas('orderItems', function ($query) use ($endDate) {
            $query->whereHas('order', function ($innerQuery) use ($endDate) {
                $innerQuery->where('created_at', '<=', $endDate);
            });
        })->get()->sum(function ($product) {
            return $product->unit_price * ($product->stocks - $product->orderItems->sum('quantity'));
        });
        // Calculate the average inventory value
        $averageInventoryValue = ($inventoryStart + $inventoryEnd) / 2;
        $inventoryTurnoverRate = $totalCOGS / $averageInventoryValue;



        return view('stocks',compact('products','totalCOGS','averageInventoryValue','inventoryTurnoverRate'));
    }


}
