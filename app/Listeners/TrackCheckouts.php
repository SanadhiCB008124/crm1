<?php

namespace App\Listeners;

use App\Events\Checkouts;
use App\Models\CheckOutEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class TrackCheckouts
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
    public function handle(Checkouts $event): void
    {
        $user = $event->user;
        $order = $event->order;

        CheckOutEvent::create([
            'user_id' => $user->id,
            'order_id' => $order->id,
            'checkout_date'=>now(),
        ]);
        Log::info("User {$user->name} checked out Order No '{$order->id}' ");
    }
}
