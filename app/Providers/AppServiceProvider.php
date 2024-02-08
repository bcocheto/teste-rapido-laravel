<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Funcoes;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        // ...
        $this->app->singleton('Funcoes', function ($app) {
            return new Funcoes;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
