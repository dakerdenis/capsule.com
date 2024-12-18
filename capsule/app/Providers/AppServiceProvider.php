<?php

namespace App\Providers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
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
        $locale = request()->segment(1); // First part of the URL, e.g., 'en', 'ru', or 'az'
        if (in_array($locale, ['en', 'ru', 'az'])) {
            App::setLocale($locale);
        } else {
            App::setLocale('en'); // Default to English
        }
    }
}
