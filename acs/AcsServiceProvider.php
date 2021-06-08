<?php

namespace Acs;

use Acs\Dboard\Http\Middleware\DboardMiddleware;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AcsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     *
     * @return void
     */
    public function register()
    {
        // mergeConfigFrom
        $this->acs_mergeConfigFrom();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        Schema::defaultStringLength(255);

        // load routes
        $this->acs_load_routes();

        // load views
        $this->acs_load_views();

        // load migrations
        $this->acs_load_migrations();
        $this->acs_load_middlewares($router);

    }

    // custom methods
    protected function acs_mergeConfigFrom(){

        $this->mergeConfigFrom(__DIR__.'/Profile/config/profile.php', 'acs_profile');

    }

    // load routes
    protected function acs_load_routes(){
        $this->loadRoutesFrom(__DIR__.'/Dboard/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/Profile/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/Merchants/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/Merchants/routes/api.php');
    }

    // load views
    protected function acs_load_views(){

        $this->loadViewsFrom(__DIR__ . '/Dboard/resources/views', 'dboard');
        $this->loadViewsFrom(__DIR__ . '/Profile/resources/views', 'profile');
        $this->loadViewsFrom(__DIR__ . '/Merchants/resources','merchantDboard');
        $this->loadViewsFrom(__DIR__ . '/Merchants/resources','merchantList');

    }

    // load migrations
    protected function acs_load_migrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/Profile/Database/migrations');
        $this->loadMigrationsFrom(__DIR__ . '/Merchants/database/migrations');
    }
    // load middlewares
    protected function acs_load_middlewares($router){
        $router->aliasMiddleware('dboard',DboardMiddleware::class);
    }
}
