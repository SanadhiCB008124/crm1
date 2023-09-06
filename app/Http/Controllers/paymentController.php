<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    public  function paymentMethods(){
        $paymentMethod= Payment::all();
        return view('checkout',compact('paymentMethod'));
    }

}
