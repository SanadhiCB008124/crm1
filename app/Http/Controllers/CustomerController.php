<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
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

    public function addCustomer(){
        return view('add-customer');
    }



    public function addEmployee(){
        return view('add-employee');
    }

    public function saveCustomer(Request $request){

        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'contact'=>'required',
            'address'=>'required',


        ]);
         $name=$request->name;
         $email=$request->email;
         $contact=$request->contact;
         $address=$request->address;




         $cust= new User();
         $cust->name=$name;
         $cust->email=$email;
         $cust->role_id=2;
          $cust->contact=$contact;
          $cust->address=$address;



         $cust->save();

         return redirect()->back()->with('success','custimer added succesfully');



    }

    public function saveEmployee(Request $request){


      $request->validate([
          'name'=> 'required',
          'email'=>'required|email',
          'contact'=>'required',
          'address'=>'required',


      ]);


      $name=$request->name;
      $email=$request->email;
      $contact=$request->contact;
      $address=$request->address;


      $cust= new User();
      $cust->name=$name;
      $cust->email=$email;
      $cust->role_id=1;
      $cust->contact=$contact;
      $cust->address=$address;


      $cust->save();

      return redirect()->back()->with('success','employee added succesfully');

    }

    public function editCustomer($id){

        $data= User::where('id','=',$id)->first();
        return view('edit-customer',compact('data'));

    }

    public function editEmployee($id){

        $data= User::where('id','=',$id)->first();
        return view('edit-employee',compact('data'));

    }


    public function updateCustomer(Request $request){

        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'contact'=>'required',
            'address'=>'required',


        ]);

        $id=$request->id;
        $name=$request->name;
        $email=$request->email;
        $contact=$request->contact;
        $address=$request->address;


      User::where('id','=',$id)->update([

        'name'=>$name,
        'email'=>$email,
        'contact'=>$contact,
        'address'=>$address


      ]);

      //return redirect()->back()->with('success','custimer added succesfully');
      return redirect('customer-list');
    }

    public function updateEmployee(Request $request){

        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'contact'=>'required',
            'address'=>'required',


        ]);

        $id=$request->id;
         $name=$request->name;
         $email=$request->email;
         $contact=$request->contact;
        $address=$request->address;


       User::where('id','=',$id)->update([

         'name'=>$name,
         'email'=>$email,
         'contact'=>$contact,
        'address'=>$address

       ]);

       //return redirect()->back()->with('success','custimer added succesfully');
       return redirect('employee-list');
     }






    public function deleteCustomer($id){

        $data= User::where('id','=',$id)->delete();

        return redirect('customer-list');
    }

    public function deleteEmployee($id){
        $data= User::where('id','=',$id)->delete();

        return redirect('employee-list');
    }

    public function viewWelcome()
    {
        $categories = Category::all();
        $products=Product::all();
        return view('welcome', compact('categories','products'));
    }

     public function  viewAddressBook(){

         $customers = User::where('role_id', 2)->get();
         return view('address-book', compact('customers'));
     }


}


