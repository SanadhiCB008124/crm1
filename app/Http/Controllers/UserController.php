<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
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

         return view('welcome', compact('categories'));
        
     }

     

     
}
