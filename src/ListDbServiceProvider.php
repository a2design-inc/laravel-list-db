<?php
namespace A2Design\LaravelListDb;

use Illuminate\Support\ServiceProvider;

class ListDbServiceProvider extends ServiceProvider {

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            \A2Design\LaravelListDb\Commands\ListDbTable::class,
            \A2Design\LaravelListDb\Commands\ListDbModel::class
        );
    }

}