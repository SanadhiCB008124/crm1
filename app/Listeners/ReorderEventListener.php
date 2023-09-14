<?php

namespace App\Listeners;

use App\Events\ReOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ReorderEventListener
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
    public function handle(ReOrder $event)
    {
        $originalOrder = $event->originalOrder;
        $newOrder = $event->newOrder;
        $user = $event->user;



        Log::info("User {$user->name} reordered order No '{$originalOrder->order_number}' as Order No '{$newOrder->order_number}'.");


    }
}
