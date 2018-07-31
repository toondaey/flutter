<?php

namespace Tests\Unit;

use Tests\TestCase;
use GuzzleHttp\Client;
use App\Payments\Rave\Rave;
use Tests\Concerns\Reflector;
use App\Payments\Rave\Encrypter;

class RaveTest extends TestCase
{
    /**
     * @test
     * @group  rave_test
     */
    public function test_rave_is_initiated()
    {
        $client = new Client([
            'base_uri' => 'https://ravesandboxapi.flutterwave.com',
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ]
        ]);

        $rave = new Rave($client);
        $reflected = new Reflector($rave);
        $client = $reflected->fetchProperty('client');
        $encrypter = $reflected->fetchProperty('encrypter');
        $pubKey = $reflected->fetchProperty('pubKey');
        $secKey = $reflected->fetchProperty('secKey');

        $this->assertInstanceOf(Rave::class, $rave);
        $this->assertInstanceOf(Client::class, $client->value);
        $this->assertInstanceOf(Encrypter::class, $encrypter->value);
        $this->assertInternalType('string', $pubKey->value);
        $this->assertInternalType('string', $secKey->value);
        $this->assertEquals(env('FLW_PUB'), $pubKey->value);
        $this->assertEquals(env('FLW_SEC'), $secKey->value);

        return $reflected;
    }

    /**
     * @test
     * @depends test_rave_is_initiated
     * @group  rave_test
     */
    public function charge(Reflector $reflected)
    {
        // $reflected->
    }
}
