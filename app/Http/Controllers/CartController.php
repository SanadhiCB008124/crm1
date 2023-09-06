<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addToCart(Request $request, $productSlug)
    {
        $customerId = auth()->user()->id;

        // Get the product details by slug
        $product = Product::where('slug', $productSlug)->first();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Check if the product is already in the cart for the user
        $cartItem = CartItem::where('user_id', $customerId)
            ->where('product_slug', $productSlug)
            ->first();

        if ($cartItem) {
            // If the product is already in the cart, update the quantity
            $cartItem->increment('quantity');
        } else {
            // If it's a new product, create a new cart item
            CartItem::create([
                'user_id' => $customerId,
                'product_slug' => $productSlug,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart.');
    }

    public function cart($productSlug)
    {
        $customerId = auth()->user()->id;
        $product = Product::where('slug', $productSlug)->first();

        // Retrieve cart items for the user
        $cartItems = CartItem::where('user_id', $customerId)->get();


        // Initialize variables for calculating totals
        $subtotal = 0;
        $taxes = 0;
        $shippingCost = 200;

        foreach ($cartItems as $cartItem) {
            // Get the product associated with the cart item
            $product = Product::where('slug', $cartItem->product_slug)->first();

            if ($product) {
                // Calculate subtotal for this item
                $subtotal += $product->unit_price * $cartItem->quantity;
                // Assuming each item has a tax of 5 LKR
                $taxes += 5 * $cartItem->quantity;
            }
        }

        // Check if the total is greater than 6000 to apply a discount
        $discount = ($subtotal > 6000) ? $subtotal * 0.10 : 0;

        // Calculate the grand total
        $grand_total = $subtotal + $taxes + $shippingCost - $discount;

        return view('cart', compact('product','cartItems', 'customerId', 'subtotal', 'taxes', 'shippingCost', 'discount', 'grand_total'));
    }

// ...

    public function removeFromCart($cartItem)
    {
        $customerId = auth()->user()->id;

        // Delete the cart item for the user
        CartItem::where('user_id', $customerId)
            ->where('id', $cartItem)
            ->delete();

        return redirect()->back()->with('success', 'Product removed from cart.');
    }

    public function increaseQuantity($cartItem)
    {
        $customerId = auth()->user()->id;

        // Increment the quantity for the user's cart item
        CartItem::where('user_id', $customerId)
            ->where('id', $cartItem)
            ->increment('quantity');

        return redirect()->back()->with('success', 'Quantity increased.');
    }

    public function decreaseQuantity($cartItem)
    {
        $customerId = auth()->user()->id;

        // Decrement the quantity for the user's cart item
        CartItem::where('user_id', $customerId)
            ->where('id', $cartItem)
            ->decrement('quantity');

        // If quantity becomes zero, remove the item from the cart
        CartItem::where('user_id', $customerId)
            ->where('id', $cartItem)
            ->where('quantity', 0)
            ->delete();

        return redirect()->back()->with('success', 'Quantity decreased.');
    }

}
