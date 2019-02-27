<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\BladeDirective;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        BladeDirective::registerTry('try');
    }
}
