<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{


    public function customer(){

    
     // $totalCustomers=User::where('role',2)->count();
      // $data= User::get();
       $data= User::where('role_id',2)->get();
      // return $data;
       return view('customer-list',compact('data'));
 
    }

  
    
    public function employee(){
       $totalEmployees=User::where('role_id',1)->count();
        // $data= User::get();
         $data= User::where('role_id',1)->get();
        // return $data;
         return view('employee-list',compact('data'));
    }




    public function addEmployee(){
        return view('add-employee');
    }

    public function saveCustomer(Request $request){
       
         $name=$request->name;
         $email=$request->email;
        

         $cust= new User();
         $cust->name=$name;
         $cust->email=$email;
        

         $cust->save();

         return redirect()->back()->with('success','custimer added succesfully');


       
    }

    public function saveEmployee(Request $request){
    

      $request->validate([
          'name'=> 'required',
          'email'=>'required|email',

      ]);


      $name=$request->name;
      $email=$request->email;
     
     

      $cust= new User();
      $cust->name=$name;
      $cust->email=$email;
      $cust->role_id=1;
      $cust->password = $request->password?$request->password:Auth::user()->password;
     

      $cust->save();

      return redirect()->back()->with('success','employee added succesfully');

    }

    public function editCustomer($email){

        $data= User::where('email','=',$email)->first();
        return view('edit-customer',compact('data'));

    }

    public function editEmployee($email){

        $data= User::where('email','=',$email)->first();
        return view('edit-employee',compact('data'));

    }


    public function updateCustomer(Request $request){

       $id=$request->id;
        $name=$request->name;
        $email=$request->email;
       
      User::where('id','=',$id)->update([

        'name'=>$name,
        'email'=>$email

      ]);

      //return redirect()->back()->with('success','custimer added succesfully');
      return redirect('customer-list');
    }

    public function updateEmployee(Request $request){

        $id=$request->id;
         $name=$request->name;
         $email=$request->email;
        
       User::where('id','=',$id)->update([
 
         'name'=>$name,
         'email'=>$email
 
       ]);
 
       //return redirect()->back()->with('success','custimer added succesfully');
       return redirect('employee-list');
     }
 





    public function deleteCustomer($email){
        $data= User::where('email','=',$email)->delete();

        return redirect('customer-list');
    }

    public function deleteEmployee($email){
        $data= User::where('email','=',$email)->delete();

        return redirect('employee-list');
    }




}


