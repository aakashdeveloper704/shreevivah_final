<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('permission', function($type) {
            if(!auth()->check())
            {
                return false;
            }

            if(is_array($type))
            {
                return in_array(auth()->user()->getRawOriginal("type"), $type);
            }

            return auth()->user()->getRawOriginal("type") == $type;
        });
    }
}
