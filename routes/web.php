<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageViewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Livewire\Products;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Response;
use Illuminate\Auth\Access\AuthorizationException;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');

})
->middleware(['role:0'])
->name('dashboard');

});






Route::get('/employee-dashboard', function () {
    return view('employee-dashboard');

})
->middleware(['role:1']);

Route::get('livewire/products', Products::class)->name('products')
                 ->middleware('role:0' );

Route::get('redirects', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');


Route::get('customer-list',[CustomerController::class,'customer'])
     ->middleware('role:0' );


Route::get('employee-list', [CustomerController::class, 'employee'])
    ->middleware('role:0');



Route::post('save-Employee',[CustomerController::class,'saveEmployee'])
->middleware('role:0');

Route::post('save-Customer',[CustomerController::class,'saveCustomer'])
->middleware('role:0');

Route::get('add-customer ',[CustomerController::class,'addCustomer'])
->middleware('role:0');

Route::get('add-employee ',[CustomerController::class,'addEmployee'])
->middleware('role:0');

Route::post('update-employee',[CustomerController::class,'updateEmployee'])
    ->middleware('role:0');


Route::get('edit-customer/{id}',[CustomerController::class,'editCustomer'])
     ->middleware('role:0');

Route::get('edit-employee/{id}',[CustomerController::class,'editEmployee'])
     ->middleware('role:0');

Route::post('update-customer',[CustomerController::class,'updateCustomer'])
     ->middleware('role:0');


Route::get('delete-customer/{id}',[CustomerController::class,'deleteCustomer'])
     ->middleware('role:0');

Route::get('delete-employee/{id}',[CustomerController::class,'deleteEmployee'])
      ->middleware('role:0');



Route::get('welcome',[CustomerController::class,'viewWelcome']);


Route::get('men-products', [ProductController::class, 'men'])->name('men');
Route::get('women-products', [ProductController::class, 'women'])->name('women');
Route::get('top-selling-products', [ProductController::class, 'topSelling'])->name('topSelling');



Route::get('/products/{category_id}', [ProductController::class, 'showProductsByCategory'])->name('products.by.category');

Route::get('category-list',[CategoryController::class,'categoryList'])->name('category-list');
Route::get('add-category',[CategoryController::class,'addCategory']);
Route::post('save-category',[CategoryController::class,'saveCategory']);
Route::get('edit-category/{id}',[CategoryController::class,'editCategory']);

Route::post('update-category',[CategoryController::class,'updateCategory'])->name('update-category');


Route::get('delete-category/{id}',[CategoryController::class,'deleteCategory']);

Route::middleware(['auth'])->group(function () {
    Route::get('cart/{id}', [CartController::class, 'cart'])->name('cart');
});

Route::post('cart/add/{productSlug}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{cartItem}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::post('/cart/increase/{cartItem}', [CartController::class, 'increaseQuantity'])->name('cart.increase');
Route::post('/cart/decrease/{cartItem}', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');

Route::get('checkout/{id}',[OrderController::class,'checkout'])->name('checkout');

Route::post('/orders/place', [OrderController::class,'placeOrder'])->name('orders.place');

Route::get('/my-orders', [OrderController::class, 'viewOrder'])->name('my-orders');

Route::get('address-book',[CustomerController::class,'viewAddressBook'])->name('address-book');

Route::match(['get', 'post'], 'search-results', [SearchController::class, 'searchProduct'])->name('products.search');

Route::get('analytics', [AnalyticsController::class, 'showCartEvents'])->name('Analytics');


Route::get('/get-cart-count', [CartController::class,'getCartCount']);

Route::get('/reorder/{order_id}', [OrderController::class, 'reorder'])->name('reorder');
Route::get('all-orders', [AnalyticsController::class, 'allOrders'])->name('all-orders');
Route::get('stocks',[StockController::class,'stocks'])->name('stocks');

Route::get('filter-products', [ProductController::class,'filter'])->name('products.filter');

Route::get('/count', [CustomerController::class,'getCount']);

Route::get('/register-count',[AnalyticsController::class,'registerCount'])->name('register-count');

Route::get('product-description/{productSlug}',[productController::class,'productDescription'])->name('product-description');

Route::post('/track-views/{product}', [ProductController::class,'trackViews'])->name('track.views');

Route::get('/least-most-viewed', [AnalyticsController::class,'getLeastMostViewed']);
Route::get('/page-views-per-day', [AnalyticsController::class,'getPageViewsPerDay']);
