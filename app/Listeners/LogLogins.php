<?php

namespace App\Listeners;

use App\Models\LoggedUsers;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Authenticated;

class LogLogins
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
    public function handle(Authenticated $event): void
    {
        $user = $event->user;


        LoggedUsers::create([
            'user_id' => $user->id,
            'session_duration' => 0,
            'login_timestamp' => now(),

        ]);

        Log::info('User authenticated: ' . $event->user->name .'at '. now());
    }
}
