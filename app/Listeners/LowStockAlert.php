<?php

namespace App\Listeners;

use App\Events\LowStock;
use App\Notifications\LowStockNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class LowStockAlert implements ShouldQueue
{
    /**
     * Create the event listener.
     *   * @param  LowStock  $event
     * @return void
     */

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LowStock $event)
    {
        $threshold = 10;


        if ($event->product->stocks < $threshold) {

            Log::info('Low stock alert for product: ' . $event->product->name);
            $event->product->notify(new LowStockNotification($event->product));


        }
    }
}
