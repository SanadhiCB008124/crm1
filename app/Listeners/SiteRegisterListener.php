<?php

namespace App\Listeners;

use App\Events\SiteRegister;
use App\Models\SiteRegistration;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SiteRegisterListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     */
    public function handle(SiteRegister $event): void
    {
        $user = $event->user;

        SiteRegistration::create([
            'user_id' => $user->id,
            'register_date' => now(),
        ]);
        Log::info("User {$user->name} registered.");
    }
}
