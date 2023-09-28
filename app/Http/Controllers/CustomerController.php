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

    public function customer()
    {
        $users = User::where('role_id', 2)->get();
        return view('customer-list', compact('users'));
    }

    public function searchCustomers(Request $request)
    {
        $users = User::where('role_id', 2)->get();
        $searchTerm = $request->input('search');
        $searchedUsers = User::query(); // Start with an empty query builder

        if (!empty($searchTerm)) {
            $searchedUsers = $searchedUsers->where(function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', "%$searchTerm%")
                    ->orWhere('email', 'LIKE', "%$searchTerm%")
                    ->orWhere('contact', 'LIKE', "%$searchTerm%")
                    ->orWhere('address', 'LIKE', "%$searchTerm%");
            });
        }

        $searchedUsers = $searchedUsers->get(); // Execute the query and get the results

        $view = !empty($searchedUsers) ? 'address-book' : 'customer-list';
        return view($view, [
            'users' =>$searchedUsers]
        );


    }



    public function addCustomer()
    {
        return view('add-customer');
    }


    public function saveCustomer(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'address' => 'required',


        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = 2;
        $user->contact = $request->contact;
        $user->address = $request->address;

        event(new SiteRegister(auth()->user()));
        $user->save();

        return redirect()->back()->with('success', 'customer added succesfully');


    }


    public function editCustomer($id)
    {

        $user = User::findOrFail($id);

        return view('edit-customer', compact('user'));

    }


    public function updateCustomer(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'address' => 'required',


        ]);


        $id = $request->id; // Get the user's ID from the input

        // Update the user's record in the database
        User::where('id', '=', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'address' => $request->input('address'),
        ]);


        return redirect()->back()->with('success', 'customer updated succesfully');
    }


    public function deleteCustomer($id)
    {

        $user = User::where('id', '=', $id)->delete();

        return redirect('customer-list');
    }


    public function viewWelcome()
    {
        $products = Product::all();

        if (auth()->check()) {
            $cartItems = CartItem::where('user_id', auth()->user()->id)->get();
        }

        return view('welcome', [
            'products' => $products,
            'cartItems' => $cartItems ?? null
        ]);

    }

    public function viewAddressBook()
    {

        $users = User::where('role_id', 2)->get();
        return view('address-book', compact('users'));
    }

    public function getCount()
    {


        $customerCount = User::where('role_id', 2)->count();


        return view('dashboard', compact('customerCount'));
    }


}


