<?php

namespace App\Providers;

use App\Http\Resources\error\ErrorResource;
use App\Models\Category;
use App\Models\Wrap;
use App\Observers\CategoryObserver;
use App\Observers\TokenObserver;
use App\Observers\WrapObserver;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Token;

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
        Token::observe(TokenObserver::class);
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
