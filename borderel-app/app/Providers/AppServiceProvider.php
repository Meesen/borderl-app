<?php

namespace App\Providers;

use App\Services\CalculatorInterface;
use App\Services\EventTotalsCalculator;
use App\Services\ExternalAPis\ApiEventOrderProvider;
use App\Services\ExternalAPis\ApiEventTicketProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ApiEventOrderProvider::class, function ($app) {
            return new ApiEventOrderProvider(
                config('services.event_api.base_url'),
                config('services.event_api.access_key'),
                config('services.event_api.secret_key'),
            );
        });

        $this->app->singleton(ApiEventTicketProvider::class, function ($app) {
            return new ApiEventTicketProvider(
                config('services.event_api.base_url'),
                config('services.event_api.access_key'),
                config('services.event_api.secret_key'),
            );
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
