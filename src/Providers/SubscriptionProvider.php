<?php

namespace Inspire\Subscription\Providers;

use Illuminate\Support\ServiceProvider;
use Inspire\Subscription\Subscription;

class SubscriptionProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $sub = new Subscription();
    }
}