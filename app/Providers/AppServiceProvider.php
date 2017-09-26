<?php

namespace App\Providers;

use App\Menu;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('welcome', function($view) {
        $view->with('menus', Menu::menus());
    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
            if ($this->app->environment() == 'local') {
        $this->app->register('Hesto\MultiAuth\MultiAuthServiceProvider');
    }
    }
}
