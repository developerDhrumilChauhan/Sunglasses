<?php

namespace BdroppySunglasses\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class BdroppySunglassesRouteServiceProvider
 * @package BdroppySunglasses\Providers
 */
class BdroppySunglassesRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','BdroppySunglasses\Controllers\BdroppySunglassesController@getHelloWorldPage');
    }
}