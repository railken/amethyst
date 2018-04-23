<?php

namespace Railken\LaraOre\Core\Notification;

use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        Notification::observe(NotificationObserver::class);
    }
}