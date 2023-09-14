<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


     public function logout(Request $request)
     {
         Auth::logout();
         $categories = Category::all();
         $products=Product::all();


         return view('welcome', compact('categories','products'));

     }




}
