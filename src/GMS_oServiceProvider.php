<?php

namespace EnsoSan\GMS_o;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;
use BladeUI\Icons\Factory;

final class GMS_oServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-gms-o.php', 'blade-gms-o');

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-gms-o', []);

            $factory->add('GMS_o', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-gms-o'),
            ], 'blade-gms-o');

            $this->publishes([
                __DIR__.'/../config/blade-gms-o.php' => $this->app->configPath('blade-gms-o.php'),
            ], 'blade-gms-o-config');
        }
    }
}
