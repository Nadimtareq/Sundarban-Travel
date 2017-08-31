<?php

namespace App\Modules\Commonpack\Providers;

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
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'commonpack');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'commonpack');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'commonpack');
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
