<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
    $role_id=Auth::user()->role_id;
   
    
   
    if($role_id==0){
        return view('dashboard');
    }
    else if($role_id==1){
        return view('employee-dashboard');
    }
    else{
        return view('welcome');
    }

 
}

public function view(){
    return view('welcome');
}



}
