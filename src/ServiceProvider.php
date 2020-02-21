<?php

namespace NickDeKruijk\Taggable;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config.php' => config_path('taggable.php'),
        ], 'config');
        if (config('taggable.migrations', true)) {
            $this->loadMigrationsFrom(__DIR__ . '/migrations');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config.php', 'taggable');
    }
}
