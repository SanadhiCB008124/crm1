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
->middleware(['role:0'])
->name('dashboard');



});









Route::get('redirects', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');


Route::get('customer-list',[CustomerController::class,'index'])
    ->middleware('role:0','role:1');


Route::get('employee-list', [CustomerController::class, 'employee'])
    ->middleware('role:0');



Route::post('save-employee',[CustomerController::class,'saveEmployee'])
->middleware('role:0');;


Route::get('add-employee',[CustomerController::class,'addEmployee'])
->middleware('role:0');;

Route::post('update-employee',[CustomerController::class,'updateEmployee'])
->middleware('role:0');;


Route::get('edit-customer/{email}',[CustomerController::class,'editCustomer'])
->middleware('role:0','role:1');

Route::get('edit-employee/{email}',[CustomerController::class,'editEmployee'])
->middleware('role:0');

Route::post('update-customer',[CustomerController::class,'updateCustomer'])
->middleware('role:0','role:1');


Route::get('delete-customer{email}',[CustomerController::class,'deleteCustomer'])
->middleware('role:0','role:1');

Route::get('delete-employee{email}',[CustomerController::class,'deleteEmployee'])
->middleware('role:0');






