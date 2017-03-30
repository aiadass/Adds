<?php

namespace App\Providers;

use App\Services\Sluggable;
use Illuminate\Support\ServiceProvider;

class SluggableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Sluggable::class);
    }
}
