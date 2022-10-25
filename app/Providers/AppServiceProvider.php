<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/* PostService */
use App\Services\Interfaces\PostServiceInterface;
use App\Services\PostService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* Binding Services*/
        $this->app->singleton(PostServiceInterface::class, PostService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
