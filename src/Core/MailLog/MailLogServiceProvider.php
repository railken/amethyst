<?php

namespace Railken\LaraOre\Core\MailLog;

use Illuminate\Support\ServiceProvider;

class MailLogServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        MailLog::observe(MailLogObserver::class);
    }
}