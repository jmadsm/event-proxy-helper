<?php

namespace Jmadsm\EventProxyHelper;

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Jmadsm\EventProxyHelper\Commands\EventProxyHelperCommand;

class EventProxyHelperServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('event-proxy-helper')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_event_proxy_helper_table')
            ->hasCommand(EventProxyHelperCommand::class);
            
        $this->registerRoutes(); 
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => 'api'
        ];
    }
}
