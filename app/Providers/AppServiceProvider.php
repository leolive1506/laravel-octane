<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Octane\Facades\Octane;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Octane::tick('simple-ticker', fn () => \Log::debug('Ticking...'))
        //     ->seconds(10);
    }
}
