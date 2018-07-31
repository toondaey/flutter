<?php

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public $mockedClient;

    public function prepareResponsesForClient(array $responses)
    {
        $mock = new MockHandler($responses);

        $handler = HandlerStack::create($mock);

        $this->mockedClient = new Client(['handler' => $handler]);
    }
}
