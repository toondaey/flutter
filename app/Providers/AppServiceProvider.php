<?php

namespace App\Providers;

use App\Payments\Rave\Rave;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('rave', function ($app) {
            $env = $this->app['config']->get('rave.env');

            return new Rave(
                new Client([
                    'base_uri' => $this->app['config']->get("rave.{$env}"),
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ])
            );
        });
    }
}
