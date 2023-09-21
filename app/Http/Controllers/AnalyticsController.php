<?php

namespace App\Http\Controllers;
use App\Models\CartEvent;
use App\Models\CheckOutEvent;
use App\Models\OnlineRegistrations;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

use App\Models\SiteRegistration;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller
{

    public  function viewAnalytics(){
        return view('analytics');
    }
    public  function showCartEvents(){

        $today = now()->format('Y-m-d');
        $sevenDaysAgo = now()->subDays(7)->format('Y-m-d');
        $lastMonthStart = now()->subMonth()->startOfMonth()->format('Y-m-d');
        $lastMonthEnd = now()->subMonth()->endOfMonth()->format('Y-m-d');


        $checkoutsToday = CheckOutEvent::whereDate('checkout_date', $today)->count();
        $registrationsToday = SiteRegistration::whereDate('register_date', $today)->count();


        $checkoutsLast7Days = CheckOutEvent::whereBetween('checkout_date', [$sevenDaysAgo, $today])->count();
        $registrationsLast7Days = SiteRegistration::whereBetween('register_date', [$sevenDaysAgo, $today])->count();
        $OnlineRegistrationsLast7Days=OnlineRegistrations::whereBetween('register_date',[$sevenDaysAgo,$today])->count();



        $checkoutsLastMonth = CheckOutEvent::whereBetween('checkout_date', [$lastMonthStart, $lastMonthEnd])->count();
        $registrationsLastMonth = SiteRegistration::whereBetween('register_date', [$lastMonthStart, $lastMonthEnd])->count();
        $OnlineRegistrationsLastMonth=OnlineRegistrations::whereBetween('register_date',[$lastMonthStart,$lastMonthEnd])->count();

        $cart_event=CartEvent::all();

        $mostAddedProduct = CartEvent::select('product_id', DB::raw('COUNT(*) as count'))
            ->groupBy('product_id')
            ->orderByDesc('count')
            ->first();

        $product = Product::find($mostAddedProduct->product_id);

        $leastAddedProduct = CartEvent::select('product_id', DB::raw('COUNT(*) as count'))
            ->groupBy('product_id')
            ->orderBy('count')
            ->first();

        $leastAddedProduct = Product::find($leastAddedProduct->product_id);



        $checkoutsPerDay = CheckOutEvent::selectRaw('DATE(checkout_date) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->get();

        $checkoutsPerMonth = CheckOutEvent::selectRaw('YEAR(checkout_date) as year, MONTH(checkout_date) as month, COUNT(*) as count')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();

        $mostSoldProducts = OrderItem::select('products.name', 'products.image', 'products.unit_price', 'products.detail', 'colors.color', 'sizes.name as size_name', DB::raw('SUM(order_items.quantity) as total_sold'))
            ->join('products', 'order_items.product_slug', '=', 'products.slug')
            ->join('colors', 'products.color_id', '=', 'colors.id')
            ->join('sizes', 'products.size_id', '=', 'sizes.id')
            ->groupBy('products.name', 'products.image', 'products.unit_price', 'products.detail', 'colors.color', 'sizes.name')
            ->orderByDesc('total_sold')
            ->limit(5)
            ->get();


        $mostSoldByColor = OrderItem::select('products.color_id', 'colors.color', DB::raw('SUM(order_items.quantity) as total_sold'))
            ->join('products', 'order_items.product_slug', '=', 'products.slug')
            ->join('colors', 'products.color_id', '=', 'colors.id') // Join the colors table
            ->groupBy('products.color_id', 'colors.color') // Group by both color_id and color
            ->orderByDesc('total_sold')
            ->first();

        $mostSoldBySize = OrderItem::select('products.size_id', 'sizes.name as size_name', DB::raw('SUM(order_items.quantity) as total_sold'))
            ->join('products', 'order_items.product_slug', '=', 'products.slug')
            ->join('sizes', 'products.size_id', '=', 'sizes.id') // Join the sizes table
            ->groupBy('products.size_id', 'sizes.name') // Group by both size_id and size name
            ->orderByDesc('total_sold')
            ->first();


        $mostSoldByCategory = OrderItem::select('products.category_id', 'categories.category_name', DB::raw('SUM(order_items.quantity) as total_sold'))
            ->join('products', 'order_items.product_slug', '=', 'products.slug')
            ->join('categories', 'products.category_id', '=', 'categories.id') // Join the categories table
            ->groupBy('products.category_id', 'categories.category_name') // Group by both category_id and category name
            ->orderByDesc('total_sold')
            ->first();

        $loginCountPerDay = DB::table('logged_users')
            ->select(DB::raw('DATE(login_timestamp) as date'), DB::raw('COUNT(*) as login_count'))
            ->groupBy('date')
            ->get();

        $averageSessionRate = DB::table('logged_users')
            ->select(DB::raw('AVG(session_duration) as avg_session_rate'))
            ->value('avg_session_rate');

        $siteRegistrationCountPerday = DB::table('site_registrations')//when the admin registers the customers
            ->select(DB::raw('DATE(register_date) as date'), DB::raw('COUNT(*) as registration_count'))
            ->groupBy('date')
            ->get();

        $onlineRegistrations = DB::table('online_registrations')// registers done through the site
            ->select(DB::raw('DATE(register_date) as date'), DB::raw('COUNT(*) as registration_count'))
            ->groupBy('date')
            ->get();

        $totalRegistrationCount= $onlineRegistrations->sum('registration_count') + $siteRegistrationCountPerday->sum('registration_count');

        $productViews = DB::table('products')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(views) as views_per_day'))
            ->groupBy(DB::raw('DATE(created_at)'))
            ->orderBy('date', 'asc')
            ->get();

        $leastViewedProduct = Product::orderBy('views', 'asc')->first();


        $mostViewedProduct = Product::orderBy('views', 'desc')->first();

        $totalCartsStarted = CartEvent::count();
        $totalCheckouts = CheckOutEvent::count();
        if ($totalCartsStarted > 0) {
            $abandonedCartRate = (($totalCartsStarted - $totalCheckouts) / $totalCartsStarted) * 100;
        } else {
            $abandonedCartRate = 0; // Prevent division by zero.
        }




        return view('analytics', compact(
            'cart_event',
            'product',
            'leastAddedProduct',
            'checkoutsPerMonth',
            'checkoutsPerDay',
            'mostSoldByColor',
            'mostSoldBySize',
            'mostSoldProducts',
            'mostSoldByCategory',
            'loginCountPerDay',
            'averageSessionRate',
            'siteRegistrationCountPerday',
            'onlineRegistrations',
            'productViews',
            'leastViewedProduct',
            'mostViewedProduct',
            'totalRegistrationCount',
            'totalCartsStarted',
            'totalCheckouts',
            'abandonedCartRate',
            'checkoutsToday',
            'registrationsToday',
            'checkoutsLast7Days',
            'registrationsLast7Days',
            'checkoutsLastMonth',
            'registrationsLastMonth',
            'OnlineRegistrationsLast7Days',
            'OnlineRegistrationsLastMonth'



        ));

    }

    public  function allOrders(){
        $orders=Order::all();
        return view('all-orders',compact('orders'));
    }

    public function registerCount(){
        $siteRegistrationCountPerday = DB::table('site_registrations')
            ->select(DB::raw('DATE(register_date) as date'), DB::raw('COUNT(*) as registration_count'))
            ->groupBy('date')
            ->get();

        return $siteRegistrationCountPerday;
    }
    public function moreAnalytics(){

        // Calculate Total Revenue
        $totalRevenue = Order::sum('total_amount');


        $totalCOGS = OrderItem::join('products', 'order_items.product_slug', '=', 'products.slug')
            ->sum(DB::raw('order_items.quantity * products.unit_price'));


        // Calculate Profit Margin
        $profitMargin = ($totalRevenue - $totalCOGS) / $totalRevenue * 100;





        return view('dashboard', compact('totalRevenue', 'totalCOGS', 'profitMargin'));

    }




}
