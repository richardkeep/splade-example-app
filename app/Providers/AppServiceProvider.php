<?php

namespace App\Providers;

use ProtoneMedia\Splade\Facades\Splade;
use Illuminate\Support\ServiceProvider;
use App\Models\User;

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
        Splade::share('adminLastSeenAt', now());
        Splade::share('users', User::all());
    }
}