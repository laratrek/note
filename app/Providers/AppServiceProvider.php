<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Telescope\TelescopeServiceProvider;
use Laravel\Telescope\Telescpoe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Enable Telescope only local development
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
        } else {
            Telescope::ignoreMigrations();
        }
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
