<?php

use App\Http\Controllers\HomeController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
->middleware(['role:0','role:1','role:2'])
->name('dashboard');
});









Route::get('redirects', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::get('view-welcome',[HomeController::class,'view']);

Route::get('customer-list',[CustomerController::class,'index']);

Route::get('employee-list',[CustomerController::class,'employee']);

Route::get('add-employee',[CustomerController::class,'addEmployee']);

Route::post('save-employee',[CustomerController::class,'saveEmployee']);


Route::get('add-customer',[CustomerController::class,'addEmployee']);//unused

Route::post('save-customer',[CustomerController::class,'saveCustomer']);//unused

Route::get('edit-customer/{email}',[CustomerController::class,'editCustomer']);

Route::get('edit-employee/{email}',[CustomerController::class,'editEmployee']);

Route::post('update-customer',[CustomerController::class,'updateCustomer']);

Route::post('update-employee',[CustomerController::class,'updateEmployee']);

Route::get('delete-customer{email}',[CustomerController::class,'deleteCustomer']);

Route::get('delete-employee{email}',[CustomerController::class,'deleteEmployee']);






