<?php

namespace ImanRjb\BitcoinRpc\Services\BitcoinRpc;

use Illuminate\Database\Eloquent\Model;
use ImanRjb\BitcoinRpc\Bitcoin;

class BitcoinRpcService
{
    private $bitcoin;

    public function __construct()
    {
        $this->bitcoin = new Bitcoin();
    }

    public function getnewaddress($address_type = 'p2sh-segwit')
    {
        return $this->bitcoin->getnewaddress();
    }
}
