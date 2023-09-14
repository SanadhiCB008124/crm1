<?php

namespace App\Http\Controllers;


use App\Events\SiteRegister;
use App\Models\CartItem;
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

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = 2;
        $user->contact = $request->contact;
        $user->address = $request->address;

         event(new SiteRegister(auth()->user()));
         $user->save();

         return redirect()->back()->with('success','customer added succesfully');



    }

    public function saveEmployee(Request $request){


      $request->validate([
          'name'=> 'required',
          'email'=>'required|email',
          'contact'=>'required|numeric',
          'address'=>'required',


      ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = 2;
        $user->contact = $request->contact;
        $user->address = $request->address;

      $user->save();


      return redirect()->back()->with('success','employee added succesfully');

    }

    public function editCustomer($id){

        $user = User::findOrFail($id);

        return view('edit-customer', compact('user'));

    }

    public function editEmployee($id){

        $user= User::where('id','=',$id)->first();
        return view('edit-employee',compact('user'));

    }


    public function updateCustomer(Request $request){

        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'contact'=>'required|numeric',
            'address'=>'required',


        ]);


        $id = $request->input('id'); // Get the user's ID from the input

        // Update the user's record in the database
        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'address' => $request->input('address'),
        ]);




        return redirect()->back()->with('success','customer updated succesfully');
    }

    public function updateEmployee(Request $request){

        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'contact'=>'required|numeric',
            'address'=>'required',


        ]);
        $id = $request->input('id'); // Get the user's ID from the input

       User::where('id','=',$id)->update([

         'name'=>$request->name,
         'email'=>$request->email,
         'contact'=>$request->contact,
        'address'=>$request->address

       ]);

       return redirect()->back()->with('success','employee updated succesfully');

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
        $cartItems = CartItem::where('user_id', auth()->user()->id)->get();
        return view('welcome', compact('categories','products','cartItems'));
    }

     public function  viewAddressBook(){

         $customers = User::where('role_id', 2)->get();
         return view('address-book', compact('customers'));
     }

    public function getCount()
    {



        $customerCount = User::where('role_id', 2)->count();
        $employeeCount = User::where('role_id', 1)->count();

        return view('dashboard', compact('customerCount','employeeCount'));
    }



}


