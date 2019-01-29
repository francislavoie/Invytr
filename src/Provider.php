<?php

namespace GlaivePro\Invytr;

use Illuminate\Support\ServiceProvider;

class Provider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
		// $this->publishes([
		// 		__DIR__.'/config.php' => config_path('invytr.php'),
		// ], 'config');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias(Invytr::class, 'invytr');
    }
}
