<?php

namespace Railken\LaraOre\Core\Address;

use Illuminate\Support\ServiceProvider;

class AddressServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        Address::observe(AddressObserver::class);
    }
}