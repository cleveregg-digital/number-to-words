<?php

namespace CleverEggDigital\NumberToWords;

use Illuminate\Support\ServiceProvider;

class NumberToWordsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'number-to-words');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'number-to-words');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('number-to-words.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'number-to-words');

        // Register the main class to use with the facade
        $this->app->singleton('number-to-words', function () {
            return new NumberToWords;
        });
    }
}
