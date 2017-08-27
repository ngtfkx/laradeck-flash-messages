<?php

namespace Ngtfkx\Laradeck\FlashMessages;

use Illuminate\Support\ServiceProvider;

class LaradeckFlashMessagesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'laradeck-flash-messages');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/laradeck-flash-messages'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__ . '/helpers.php';
    }
}