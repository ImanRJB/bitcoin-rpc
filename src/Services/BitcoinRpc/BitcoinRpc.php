<?php

namespace ImanRjb\BitcoinRpc\Services\BitcoinRpc;

use Illuminate\Support\Facades\Facade;

/**
 * @method static getnewaddress($address_type = 'p2sh-segwit')
 */

class BitcoinRpc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bitcoinRpc';
    }
}
