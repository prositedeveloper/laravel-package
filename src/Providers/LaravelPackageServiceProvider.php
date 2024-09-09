<?php 

namespace Prositedeveloper\Package\Providers;

use Illuminate\Support\ServiceProvider;
use Prositedeveloper\Package\Services\TestService;

class LaravelPackageServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TestService::class, TestService::class);

        $this->publishes([
            __DIR__.'/../../config/laravel-package.php' => config_path('laravel-package.php'),
        ], 'laravel-package');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/laravel-package-web.php');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'laravel-package');

        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/laravel-package'),
        ], 'laravel-package');
    }
}