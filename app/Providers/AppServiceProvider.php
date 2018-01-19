<?php

namespace App\Providers;

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
        $this->app->bind(
            'App\Contracts\OfferingsInterface',
            'App\Services\OfferingsService'
        );
        $this->app->bind(
            'App\Contracts\PurchasesInterface',
            'App\Services\PurchasesService'
        );
    }
}
