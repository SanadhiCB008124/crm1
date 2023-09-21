<?php

namespace App\View\Components;

use App\Models\CartItem;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public function render(): View
    {

        if(auth()->check()){
            $customerId = auth()->user()->id;
            $cartItems = CartItem::where('user_id', $customerId)->get();
        }

        return view('components.header', [
            'categories' => \App\Models\Category::all(),
            'cartItems' => $cartItems ?? null,
        ]);
    }
}
