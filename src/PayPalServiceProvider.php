<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 1/5/17
 * Time: 3:10 AM
 */

namespace PayPal;


use Illuminate\Support\ServiceProvider;

class PayPalServiceProvider extends ServiceProvider
{

    /**
     *
     */
    public function boot(){
        // Publishes the config file
        $this->publishes([
            __DIR__.'/config/paypal.php' => config_path('paypal.php'),
        ]);

        // Gets the paypal api context and binds it into
        // the IoC container
        $context = Context::make();
        $this->app->singleton(PayPal::API_CONTEXT, function() use ( $context) {
            return $context;
        });
    }

    public function register(){

    }

}