<?php

namespace ImanRjb\BitcoinRpc\Services\ModelRepository;

use Illuminate\Support\Facades\Facade;

class BitcoinRpc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bitcoinRpc';
    }
}
