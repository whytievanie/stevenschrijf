<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('cart_deposit', function($app) {

            $storage = $app['session']; // laravel session storage
            $events = $app['events']; // laravel event handler
            $instanceName = 'cart_deposit'; // your cart instance name
            $session_key = 'AsASDMCks0ks1'; // your unique session key to hold cart items
            return new Cart(
                $storage,
                $events,
                $instanceName,
                $session_key
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
