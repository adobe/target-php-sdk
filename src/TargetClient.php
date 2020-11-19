<?php

namespace Adobe\Target\Edge\Client;

use Adobe\Target\Delivery\v1\Api\DeliveryApi;

class TargetClient
{
    private $deliveryApi;

    public function __construct()
    {
        $this->deliveryApi = new DeliveryApi();
    }

    public static function create()
    {
        return new TargetClient();
    }
}
