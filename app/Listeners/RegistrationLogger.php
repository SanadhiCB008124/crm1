<?php

namespace App\Listeners;

use App\Events\OnlineRegister;
use App\Models\OnlineRegistrations;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class RegistrationLogger
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
    public function handle(OnlineRegister $event): void
    {
        OnlineRegistrations::create(
            [
                'user_id' => $event->user->id,
                'register_date' => now(),
            ]
        );

        Log::info('User registered: ' . $event->user->email);
    }
}
