<?php

namespace App\Listeners;

use App\Models\LoggedUsers;
use Illuminate\Auth\Events\Logout;
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

    }

    /**
     * Handle the event.
     */
    public function handle($event)
    {
        if ($event instanceof Authenticated) {
            $user = $event->user;

            LoggedUsers::create([
                'user_id' => $user->id,
                'session_duration' => 0,
                'login_timestamp' => now(),
            ]);

            Log::info('User authenticated: ' . $event->user->name .' at with '.$event->user->id.' '. now());
        } elseif ($event instanceof Logout) {
            $user = $event->user;

            // Find the corresponding logged user entry and update the logout timestamp
            $loggedUser = LoggedUsers::where('user_id', $user->id)

                ->whereNull('logout_timestamp')
                ->latest()
                ->first();

            if ($loggedUser) {
                $loggedUser->update([
                    'logout_timestamp' => now(), // Set the logout timestamp
                    'session_duration' => now()->diffInSeconds($loggedUser->login_timestamp), // Calculate session duration
                ]);
            }
        }
    }
}
