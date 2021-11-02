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

        $this->publishes([
            __DIR__.'/config/bitcoin.php' => lumen_config_path('bitcoin.php'),
        ], 'bitcoin-rpc');

        if (file_exists($this->app->basePath() . '/config/bitcoin.php')) {
            $this->mergeConfigFrom($this->app->basePath() . '/config/bitcoin.php', 'bitcoin');
        } else {
            $this->mergeConfigFrom(__DIR__ . '/config/bitcoin.php', 'bitcoin');
        }
    }
}
