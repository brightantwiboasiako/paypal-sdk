<?php
/**
 * Created by PhpStorm.
 * User: brightantwiboasiako
 * Date: 1/5/17
 * Time: 3:24 AM
 */

namespace PayPal;


use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class Context
{

    public static function make(){
        $context = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id'), config('paypal.client_secret')
            )
        );

        // Set the configurations
        $context->setConfig(config('paypal.config'));

        return $context;
    }

}