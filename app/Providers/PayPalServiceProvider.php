<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

class PayPalServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(ApiContext::class, function () {
            $paypalConfig = config('services.paypal');

            $apiContext = new ApiContext(new OAuthTokenCredential(
                $paypalConfig['client_id'],
                $paypalConfig['secret']
            ));

            $apiContext->setConfig($paypalConfig['settings']);

            return $apiContext;
        });
    }
}
