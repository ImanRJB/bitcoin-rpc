<?php

namespace ImanRjb\BitcoinRpc\Services\BitcoinRpc;

use Illuminate\Support\Facades\Facade;

class BitcoinRpc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bitcoinRpc';
    }
}
