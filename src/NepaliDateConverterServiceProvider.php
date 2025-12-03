<?php

namespace NepaliDateConverter;

use Illuminate\Support\ServiceProvider;

class NepaliDateConverterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(NepaliDateConverter::class, function ($app) {
            return new NepaliDateConverter();
        });
    }

    public function boot()
    {
        // Optional: publish config
    }
}
