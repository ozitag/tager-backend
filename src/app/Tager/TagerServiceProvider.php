<?php

namespace App\Tager;

use Illuminate\Support\ServiceProvider;

use OZiTAG\Tager\Backend\Menus\TagerMenus;
use OZiTAG\Tager\Backend\Panel\TagerPanel;
use OZiTAG\Tager\Backend\Seo\TagerSeo;
use OZiTAG\Tager\Backend\Rbac\TagerScopes;

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
        // TagerMenus::registerMenu('header', 'Header Menu');

        // TagerPanel::registerRouteHandler('/catalog/(.+?)$', ProductRouteHandler::class);

        // TagerSeo::registerSitemapHandler(ProductSitemapHandler::class);

        /* TagerScopes::registerGroup('App', [
            UsersScope::Base => 'App Base Scope',
        ]); */
    }
}
