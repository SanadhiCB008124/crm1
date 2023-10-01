<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Livewire\Products;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])
    ->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index']);
    })
    ->middleware(['role:0'])
    ->name('dashboard');


//Route::get('welcome',[CustomerController::class,'viewWelcome']);
Route::get('/', [CustomerController::class, 'viewWelcome']);

Route::get('redirects', [HomeController::class, 'index'])->name('index');
Route::get('/logout', [UserController::class, 'logout']);
Route::get('men-products', [ProductController::class, 'men'])->name('men');
Route::get('women-products', [ProductController::class, 'women'])->name('women');
Route::get('top-selling-products', [ProductController::class, 'topSelling'])->name('topSelling');
Route::get('/products/{category_id}', [ProductController::class, 'showProductsByCategory'])->name('products.by.category');
Route::get('cart/{id}', [CartController::class, 'cart'])->name('cart');
Route::post('cart/add/{productSlug}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{cartItem}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/increase/{cartItem}', [CartController::class, 'increaseQuantity'])->name('cart.increase');
Route::post('/cart/decrease/{cartItem}', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
Route::get('checkout/{id}', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/orders/place', [OrderController::class, 'placeOrder'])->name('orders.place');
Route::get('/my-orders', [OrderController::class, 'viewOrder'])->name('my-orders');
Route::get('/get-cart-count', [CartController::class, 'getCartCount']);
Route::get('/reorder/{order_id}', [OrderController::class, 'reorder'])->name('reorder');
Route::get('filter-products', [ProductController::class, 'filter'])->name('products.filter');
Route::get('/count', [CustomerController::class, 'getCount']);
Route::get('/register-count', [AnalyticsController::class, 'registerCount'])->name('register-count');
Route::get('product-description/{productSlug}', [productController::class, 'productDescription'])->name('product-description');
Route::post('/track-views/{product}', [ProductController::class, 'trackViews'])->name('track.views');
Route::get('/page-views', [AnalyticsController::class, 'productViews'])->name('product-views');
Route::get('/more-analytics', [AnalyticsController::class, 'moreAnalytics'])->name('more-analytics');
Route::get('address-book', [CustomerController::class, 'viewAddressBook'])->name('address-book');
Route::get('stocks', [StockController::class, 'stocks'])->name('stocks');
Route::get('customer-list', [CustomerController::class, 'customer'])->name('customer-list');
Route::get('edit-customer/{id}', [CustomerController::class, 'editCustomer']);
Route::post('update-customer/{id}', [CustomerController::class, 'updateCustomer']);
Route::get('delete-customer/{id}', [CustomerController::class, 'deleteCustomer']);
Route::post('save-Customer', [CustomerController::class, 'saveCustomer'])->name('save-Customer');
Route::get('add-customer ', [CustomerController::class, 'addCustomer']);
Route::get('analytics', [AnalyticsController::class, 'showCartEvents'])->name('Analytics');
Route::get('all-orders', [OrderController::class, 'allOrders'])->name('all-orders');
Route::get('abandonedCart', [AnalyticsController::class, 'calculateAbandonedCartRate']);
Route::get('livewire/products', Products::class)->name('products');
Route::get('livewire/create', Products::class)->name('create');
Route::get('checkout-page', [OrderController::class, 'checkoutPageNew']);
Route::get('customer-search',[CustomerController::class, 'searchCustomers'])->name('customer-search');
Route::match(['get', 'post'], 'search-results', [SearchController::class, 'searchProduct'])->name('products.search');
Route::get('filter-orders', [OrderController::class, 'filterOrders'])->name('orders.filter');
Route::get('category-list', [CategoryController::class, 'categoryList'])->name('category-list');
Route::get('add-category', [CategoryController::class, 'addCategory'])->name('add-category');
Route::post('save-category', [CategoryController::class, 'saveCategory'])->name('save-category');
Route::get('edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
Route::post('update-category', [CategoryController::class, 'updateCategory'])->name('update-category');
Route::get('delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');
