<?php

namespace App\Http\Controllers;

use App\Events\UserRegistrations;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
 public $user;

    public function customer(){
       $users= User::where('role_id',2)->get();
       return view('customer-list',compact('users'));

    }



    public function employee(){


         $users= User::where('role_id',1)->get();

         return view('employee-list',compact('users'));
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




         $user= new User();
         $user->name=$name;
         $user->email=$email;
         $user->role_id=2;
          $user->contact=$contact;
          $user->address=$address;



         $user->save();

        event(new UserRegistrations(auth()->user(), $user));


         return redirect()->back()->with('success','customer added succesfully');



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


      $user= new User();
      $user->name=$name;
      $user->email=$email;
      $user->role_id=1;
      $user->contact=$contact;
      $user->address=$address;


      $user->save();
      event(new UserRegistrations(auth()->user(), $user));

      return redirect()->back()->with('success','employee added succesfully');

    }

    public function editCustomer($id){

        $user= User::where('id','=',$id)->first();
        return view('edit-customer',compact('user'));

    }

    public function editEmployee($id){

        $user= User::where('id','=',$id)->first();
        return view('edit-employee',compact('user'));

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

        $user= User::where('id','=',$id)->delete();

        return redirect('customer-list');
    }

    public function deleteEmployee($id){
        $user= User::where('id','=',$id)->delete();

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


