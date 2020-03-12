<?php
namespace Chondal\AyudaDvs;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AyudaDvsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views/', 'AyudaDvs');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/ayuda-dvs')
        ], 'ayuda-dvs-views');

        $this->publishes([
            __DIR__.'/../config/ayuda-dvs.php' => base_path('config/ayuda-dvs.php')
        ], 'ayuda-dvs-config');


    }

    public function register()
    {
        $this->app->bind('ayuda-dvs', function(){
            return new Ayuda;
        });

        $this->mergeConfigFrom(__DIR__.'/../config/ayuda-dvs.php','ayuda-dvs');
    }
}
