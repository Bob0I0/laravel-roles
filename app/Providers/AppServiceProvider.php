<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
        view()->composer('*', function ($view) {
            if (Auth::check()) { View::share([
                    'userGlobal' => User::find(Auth::user()->id),
                    'judul' => 'E-Office',
                    'footer' => 'E-Office Production 2024'
                ]);
            } else {
                $view->with('userGlobal', null);
            }
        });
    }
}
