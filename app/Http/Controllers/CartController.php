<?php

namespace App\Http\Controllers;

use App\Events\ProductAddedToCart;
use App\Models\CartItem;
use App\Models\Product;


use Illuminate\Http\Request;

class CartController extends Controller
{

    private $product;

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
            // If the product is already in the cart, update the quantity and decrease stocks
            $cartItem->increment('quantity');
            $cartItem->product->decrement('stocks');
        } else {
            // If it's a new product, create a new cart item
            CartItem::create([
                'user_id' => $customerId,
                'product_slug' => $productSlug,
                'quantity' => 1,
            ]);
        }
        event(new ProductAddedToCart(auth()->user(), $product));


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

    public function removeFromCart($cartItemId)
    {
        $customerId = auth()->user()->id;

        // Delete the cart item for the user
        $cartItem = CartItem::where('user_id', $customerId)
            ->where('id', $cartItemId)
            ->first();

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Cart item not found.');
        }

        $product = Product::where('slug', $cartItem->product_slug)->first();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Increment the product's stock by the quantity being removed from the cart
        $product->increment('stocks', $cartItem->quantity);

        // Delete the cart item for the user
        $cartItem->delete();

        return redirect()->back()->with('success', 'Product removed from cart.');
    }

    public function increaseQuantity($cartItemId)
    {
        $customerId = auth()->user()->id;

        // Retrieve the cart item by its ID
        $cartItem = CartItem::where('user_id', $customerId)
            ->where('id', $cartItemId)
            ->first();

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Cart item not found.');
        }

        // Increment the quantity for the user's cart item
        $cartItem->increment('quantity');

        // Decrement the product's stock
        $product = Product::where('slug', $cartItem->product_slug)->first();

        if ($product) {
            $product->decrement('stocks');
        } else {
            return redirect()->back()->with('error', 'Product not found.');
        }

        return redirect()->back()->with('success', 'Quantity increased.');
    }

    public function decreaseQuantity($cartItemId)
    {
        $customerId = auth()->user()->id;

        // Retrieve the cart item by its ID
        $cartItem = CartItem::where('user_id', $customerId)
            ->where('id', $cartItemId)
            ->first();

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Cart item not found.');
        }

        // Decrement the quantity for the user's cart item
        $cartItem->decrement('quantity');

        // Increment the product's stock
        $product = Product::where('slug', $cartItem->product_slug)->first();

        if ($product) {
            $product->increment('stocks');
        } else {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // If quantity becomes zero, remove the item from the cart
        if ($cartItem->quantity <= 0) {
            $cartItem->delete();
        }

        return redirect()->back()->with('success', 'Quantity decreased.');
    }

    public function getCartCount()
    {
        $customerId = auth()->user()->id;


        $cartCount = CartItem::where('user_id', $customerId)->count();


        return $cartCount;
    }



}
