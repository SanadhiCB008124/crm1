<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        if (App::environment('production')) {
            URL::forceScheme('https');
        }
    
        $this->app->bind('path.public', function () {
            return base_path('public_html'); // Replace 'public_html' with your public directory if different
        });
    
        $this->publishes([
            public_path('storage') => storage_path('app/public'),
        ], 'public');
    }
}
