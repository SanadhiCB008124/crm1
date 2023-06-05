<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Livewire\Products;

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


Route::get('redirects', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');


Route::get('customer-list',[CustomerController::class,'customer'])
     ->middleware('role:0' );
   
Route::get('products', Products::class);
     

Route::get('employee-list', [CustomerController::class, 'employee'])
    ->middleware('role:0');



Route::post('save-Employee',[CustomerController::class,'saveEmployee'])
->middleware('role:0');


Route::get('add-employee',[CustomerController::class,'addEmployee'])
->middleware('role:0');

Route::post('update-employee',[CustomerController::class,'updateEmployee'])
    ->middleware('role:0');


Route::get('edit-customer',[CustomerController::class,'editCustomer'])
     ->middleware('role:0');

Route::get('edit-employee',[CustomerController::class,'editEmployee'])
     ->middleware('role:0');

Route::post('update-customer',[CustomerController::class,'updateCustomer'])
     ->middleware('role:0');


Route::get('delete-customer',[CustomerController::class,'deleteCustomer'])
     ->middleware('role:0');

Route::get('delete-employee',[CustomerController::class,'deleteEmployee'])
      ->middleware('role:0');



Route::get('welcome',[CustomerController::class,'viewWelcome']);



