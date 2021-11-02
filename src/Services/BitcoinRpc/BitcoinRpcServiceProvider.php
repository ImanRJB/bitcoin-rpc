<?php

namespace ImanRjb\BitcoinRpc\Services\ModelRepository;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class BitcoinRpcServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('bitcoinRpc', function () {
            return App::make('ImanRjb\BitcoinRpc\Services\BitcoinRpc\BitcoinRpcService');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
