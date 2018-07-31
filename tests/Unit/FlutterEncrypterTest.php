<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Payments\Rave\Encrypter;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FlutterEncrypterTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * @test
     * @group  encryption_test
     * @return void
     */
    public function encryption_class_inits()
    {
        $encrypter = new Encrypter;

        $this->assertInstanceOf(Encrypter::class, $encrypter);
    }

    /**
     * @test
     * @group  encryption_test
     * @return void
     */
    public function encryption_class_creates_encryption_key()
    {
        $key = Encrypter::getKey(config('rave.keys.public'));

        $this->assertInternalType('string', $key);
    }

    /**
     * @test
     * @group  encryption_test
     * @return void
     */
    public function encryption_class_encrypts_data()
    {
        $key = Encrypter::encrypt3Des(json_encode(['test' => 1000000]));

        $this->assertInternalType('string', $key);
    }
}
