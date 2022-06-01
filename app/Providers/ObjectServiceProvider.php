<?php

namespace App\Providers;

use App\Components\Object\ObjectManager;
use Illuminate\Support\ServiceProvider;

class ObjectServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('object', function ($app, $parameter) {
            return new ObjectManager($app, $parameter['object']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
