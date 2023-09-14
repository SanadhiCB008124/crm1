<?php

namespace App\Listeners;

use App\Events\ProductAddedToCart;
use App\Models\CartEvent;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class TrackProductAddedToCart
{
    /**
     * Create the event listener.
     */

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductAddedToCart $event): void
    {
        $user = $event->user;
        $product = $event->product;

        CartEvent::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);
        Log::info("User {$user->name} added '{$product->name}' to their cart.");

    }
}
