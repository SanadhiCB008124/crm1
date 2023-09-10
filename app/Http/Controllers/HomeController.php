<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PhpParser\Node\Expr\PreDec;

class HomeController extends Controller
{
    public function index(){
    $role_id=Auth::user()->role_id;

    if($role_id==0){

        $customerCount = User::where('role_id', 2)->count();
        $employeeCount = User::where('role_id', 1)->count();
        return view('dashboard', compact('customerCount', 'employeeCount'));
    }
    else if($role_id==1){
        return view('employee-dashboard');
    }
    else{
            $categories = Category::all();
            $products=Product::all();
            $cartItems = CartItem::where('user_id', auth()->user()->id)->get();
            return view('welcome', compact('categories','products','cartItems'));
        }
    }







}
