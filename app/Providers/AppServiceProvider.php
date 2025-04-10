<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
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
        view()->composer('layout.app', function ($view) {
            // Get the currently authenticated user using Auth facade
            $user = Auth::user(); // Use Auth facade instead of auth()

            // Pass the authenticated user to the view
            $view->with('user', $user);
        });
    }
}