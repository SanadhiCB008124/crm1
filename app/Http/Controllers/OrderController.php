<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public  function checkout(){
        $customerId = auth()->user()->id;
        $cartItems = Cart::where('customer_id', $customerId)->get();
        $paymentMethod = Payment::all();


        return view('checkout',compact('cartItems','customerId','paymentMethod'));
    }

    public function placeOrder(Request $request)
    {
        $customerId = auth()->user()->id;
        $cartItems = CartItem::where('user_id', $customerId)->get();

        // Calculate the subtotal and taxes (as you've done before)
        $subtotal = 0;
        $taxes = 5;
        $shippingCost = 200;

        // Calculate subtotal and taxes

        // Calculate the total before applying the discount
        $total_before_discount = $subtotal + $taxes + $shippingCost;

        // Check if the total before discount is greater than 6000 to apply a discount
        $discount = ($total_before_discount > 6000) ? $total_before_discount * 0.10 : 0;

        // Calculate the grand total
        $total_amount = $total_before_discount - $discount + $shippingCost;

        // Create a new order record in the orders table
        $order = Order::create([
            'customer_id' => $customerId,
            'order_number' => 'ORD-' . strtoupper(uniqid()),
            'total_amount' => $total_amount,
            'status' => 'pending',
            'payment_id' => $request->input('payment_id'), // Assuming the payment method is selected via a form input
            'payment_status' => 'Processed',
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'shipping_address' => $request->input('shipping_address'),
            'contact' => $request->input('contact'),
            'notes' => $request->input('notes'),
            'billing_address' => $request->input('billing_address'),
            'date_of_order' => now(),
        ]);

        // Create order items associated with the current order
        $this->createOrderItems($order, $cartItems);

        return redirect()->back()->with('success', 'Order placed successfully.');
    }

    private function createOrderItems(Order $order, $cartItems)
    {
        foreach ($cartItems as $cartItem) {
            $productSlug = $cartItem->product_slug; // Access the product slug for each cart item

            // Retrieve the product associated with the cart item
            $product = Product::where('slug', $productSlug)->first();

            if ($product) {
                // Create an order item associated with the current order
                $orderItem = new OrderItem([
                    'order_id' => $order->id, // Associate the order item with the current order
                    'product_slug' => $productSlug,
                    'quantity' => $cartItem->quantity,

                ]);

                // Save the order item
                $orderItem->save();

                // Delete the cart item
                $cartItem->delete();
            }
        }
    }

    public function  viewOrder(){
        $customerId = auth()->user()->id;
        $orders= Order::where('customer_id', $customerId)->get();
        return view('my-order',compact('orders'));

    }









}
