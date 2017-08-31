<?php

namespace App\Modules\Groupfare\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'groupfare');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'groupfare');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'groupfare');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
