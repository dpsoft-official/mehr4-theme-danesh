<?php

namespace Dpsoft\Mehr4ThemeDanesh;

use Illuminate\Support\ServiceProvider;

class Mehr4ThemeDaneshServiceProvider extends ServiceProvider

{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'mehr4-theme-danesh');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'mehr4-theme-danesh');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
//        app('setting')->set('paginate.count',6);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('mehr4-theme-danesh.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/mehr4-theme-danesh'),
            ], 'views');

            // Publishing assets.
            $this->publishes([
                __DIR__ . '/../public' => public_path('vendor/mehr4-theme-danesh'),
            ], 'assets');

            //publishing assets.404
            $this->publishes([
                __DIR__ . '/../resources/views/errors' => resource_path('views/errors'),
            ], 'page404');

            //publish theme directory
//            $this->publishes([
//                __DIR__ . '/../public/images/theme' => storage_path('app/public/theme'),
//            ], 'theme');


            //for mehr you must publish auth views
//            $this->publishes([
//                __DIR__.'/../resources/views/auth' => resource_path('views/auth'),
//            ], 'mehr-theme-danesh-auth-views');
//


            // Publishing the translation files.
            $this->publishes([
                __DIR__ . '/../resources/lang' => resource_path('lang/vendor/mehr4-theme-danesh'),
            ], 'lang');


            // Registering package commands.
            $this->commands([
                InstallThemeCommand::class
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'mehr4-theme-danesh');

        // Register the main class to use with the facade
        $this->app->singleton('mehr4-theme-danesh', function () {
            return new Mehr4ThemeDanesh;
        });
    }
}
