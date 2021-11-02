<?php

namespace ImanRjb\BitcoinRpc;

use Illuminate\Support\ServiceProvider;

class BitcoinRpcServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias(\ImanRjb\BitcoinRpc\Services\BitcoinRpc\BitcoinRpc::class, 'BitcoinRpc');
        $this->app->register(\ImanRjb\BitcoinRpc\Services\BitcoinRpc\BitcoinRpcServiceProvider::class);
    }
}
