<?php

namespace RioBoatShow\Providers;

use Illuminate\Support\ServiceProvider;

class RioBoatShowRepositoryProvider extends ServiceProvider
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
        $this->app->bind(
            \RioBoatShow\Repositories\InsertRepository::class,
            \RioBoatShow\Repositories\InsertRepositoryEloquent::class
        );
    }
}
