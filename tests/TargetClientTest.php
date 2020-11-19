<?php

namespace Adobe\Target\Edge\Client;

require "vendor/autoload.php";

use Adobe\Target\Edge\Client\TargetClient;
use PHPUnit\Framework\TestCase;

class TargetClientTest extends TestCase
{
    public function testTrue()
    {
        $client = new TargetClient();

        $this->assertTrue(isset($client));
    }
}
