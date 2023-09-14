<?php

namespace App\Providers;

// use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // View::share('NAME_VIEW_SHARE', 'Trương Quang Bá');
        // Facades\View::composer('home', function (View $view) {
        //     $view->with('message', '1111');
        // });
    }
}
