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
        'bvn' => 'v2/kyc/bvn/%s',
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
	public function charge(array $data): Rave
    {
        $data = array_merge($data, $this->setPubKey());

        $encryptedData = $this->encrypter->encrypt3Des(json_encode($data));

        $this->response = $this->client->post(
            $this->uris['charge'],
            [
                'json' => array_merge($this->setPubKey(), ['client' => $encryptedData]),
                'http_errors' => false,
            ]
        );

        return $this;
    }

    /**
     * Get response.
     *
     * @return array
     */
    public function getResponse(): array
    {
        return json_decode((string) $this->response->getBody(), true);
    }

    public function validate(array $data): Rave
    {
        $data = array_merge($this->setPubKey(), $data);

        $this->response = $this->client->post(
            $this->uris['validate'],
            [
                'json' => $data,
                'http_errors' => false,
            ]
        );

        return $this;
    }

    public function verify(array $data): Rave
    {
        $data = array_merge(['SECKEY' => $this->secKey], $data);

        $this->response = $this->client->post(
            $this->uris['verify'],
            [
                'json' => $data,
                'http_errors' => false,
            ]
        );

        return $this;
    }

    public function bvn(string $bvn): Rave
    {
        $data = ['seckey' => $this->secKey];

        $this->response = $this->client->get(
            sprintf($this->uris['bvn'], $bvn),
            [
                'query' => $data,
                'http_errors' => false,
            ]
        );

        return $this;
    }

    protected function setPubKey()
    {
        return [
            'PBFPubKey' => $this->pubKey
        ];
    }
}
