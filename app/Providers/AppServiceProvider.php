<?php

namespace App\Providers;

use App\view\components\AppLayout;
use Illuminate\Support\ServiceProvider;
use App\View\Component\IndesLayout;
use Illuminate\Support\Facades\Blaade;


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
        //
    }
}
