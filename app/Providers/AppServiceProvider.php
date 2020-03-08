<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Support\DateFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        DateFactory::use(CarbonImmutable::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
