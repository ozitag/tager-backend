<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TagerServiceProvider extends ServiceProvider
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
        // TagerPanel::registerRouteHandler('/catalog/(.+?)$', ProductRouteHandler::class);

        /* TagerScopes::registerGroup('App', [
            UsersScope::Base => 'App Base Scope',
        ]); */
    }
}
