<?php

namespace App\Providers;

use App\Billings\Gateways\PaypalGateway;
use App\Billings\PaymentGatewayInterface;
use Illuminate\Support\ServiceProvider;
use Softon\Indipay\Indipay;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PaymentGatewayInterface::class, function($app){
            $gateway = request()->gateway;
           if ($gateway === "paypal"){
               return new PaypalGateway();
           }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
