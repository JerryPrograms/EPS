<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadHelpers();
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

    private function loadHelpers()
    {
        foreach (glob(__DIR__ . '/../Http/Helpers/*.php') as $helper_file) {
            require_once $helper_file;
        }
    }
}
