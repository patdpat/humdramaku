<?php

namespace Stampspv\Wittylight;

use Illuminate\Support\ServiceProvider;

class WittylightServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Stampspv\Wittylight\WittylightController');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
