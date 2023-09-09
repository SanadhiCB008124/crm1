<?php

namespace App\Providers;

use App\Events\Checkouts;
use App\Events\ProductAddedToCart;
use App\Events\UserRegistrations;
use App\Listeners\LogLogins;
use App\Listeners\LogRegistration;
use App\Listeners\TrackCheckouts;
use App\Listeners\TrackProductAddedToCart;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        ProductAddedToCart::class => [
            TrackProductAddedToCart::class,
        ],
        Authenticated::class => [
            LogLogins::class,
        ],

        Checkouts::class => [
            TrackCheckouts::class,
        ],

        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
