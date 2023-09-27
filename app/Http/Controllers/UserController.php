<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Auth\Events\Logout;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function logout(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            // Debugging: Log the user information
            Log::info('User logged out: ' . $user->name . ' with ID ' . $user->id .'at'. now());

            Auth::logout();
            event(new Logout(auth()->user(), $user));


            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        } else {
            // Debugging: Log an error message if the user instance is not found
            Log::error('User not found during logout.');

            return redirect('/');
        }
    }

}
