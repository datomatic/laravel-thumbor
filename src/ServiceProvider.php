<?php

declare(strict_types=1);

namespace Datomatic\LaravelThumbor;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/thumbor.php', 'thumbor');

        $this->app->singleton(\Datomatic\LaravelThumbor\Url\BuilderFactory::class, function ($app) {
            return \Datomatic\LaravelThumbor\Url\BuilderFactory::construct(config('thumbor.url'), config('thumbor.key'));
        });

        $this->app->singleton(\Datomatic\LaravelThumbor\Mocked\Url\BuilderFactory::class, function ($app) {
            return \Datomatic\LaravelThumbor\Mocked\Url\BuilderFactory::construct();
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/thumbor.php' => config_path('thumbor.php'),
        ], 'config');
    }
}
