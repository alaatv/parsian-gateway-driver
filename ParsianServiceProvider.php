<?php

namespace AlaaTV\ParsianDriver;

use AlaaTV\Gateways\PaymentDriver;
use Illuminate\Support\ServiceProvider;

class ParsianServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config.php', 'parsian');

        PaymentDriver::addDriver('parsian', ParsianGateWay::class);
    }

    public function boot()
    {

    }
}