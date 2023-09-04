<?php

namespace BdroppySunglasses\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class BdroppySunglassesServiceProvider
 * @package BdroppySunglasses\Providers
 */
class BdroppySunglassesServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(BdroppySunglassesRouteServiceProvider::class);
    }
}