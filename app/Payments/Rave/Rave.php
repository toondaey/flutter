<?php

namespace App\Payments\Rave;

use GuzzleHttp\Client;

class Rave
{
    protected $pubKey;

    protected $secKey;

    protected $encrypter;

    public $response;

    protected $client;

    protected $uris = [
        'charge' => '/flwv3-pug/getpaidx/api/charge',
        'validate' => '/flwv3-pug/getpaidx/api/validatecharge',
        'verify' => '/flwv3-pug/getpaidx/api/v2/verify',
        'bvn' => 'v2/kyc/bvn/%d',
    ];

    public function __construct(Client $client)
    {
        $this->client = $client;

        $this->encrypter = new Encrypter;

        $this->pubKey = config('rave.keys.public');

        $this->secKey = config('rave.keys.secret');
    }

    /**
     * Charge card payment.
     *
     * @param  array  $data
     */
	public function charge(array $data)
    {
        $data = array_merge($data, $this->setPubKey());

        $encryptedData = $this->encrypter->encrypt3Des($data);

        $this->response = $this->client->post(
            $this->uris['charge'],
            [
                'json' => array_merge($this->setPubKey(), ['client' => $encryptedDatat]),
                'http_errors' => false,
            ]
        );
    }

    /**
     * Get response.
     *
     * @return array
     */
    public function getRespnose(): array
    {
        return json_decode($this->response, true);
    }

    public function validate()
    {}

    public function verify()
    {}

    protected function setPubKey()
    {
        return [
            'PBFPubKey' => $this->pubKey
        ];
    }
}
