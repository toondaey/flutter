<?php

namespace App\Payments\Rave;

use GuzzleHttp\Client;

class Rave
{
    protected $pubKey;

    protected $secKey;

    protected $encrypter;

    protected $live;

    public $response;

    protected $uris = [
        'charge' => '/flwv3-pug/getpaidx/api/charge',
        'validate' => '/flwv3-pug/getpaidx/api/validatecharge',
        'verify' => '/flwv3-pug/getpaidx/api/v2/verify',
        'bvn' => 'v2/kyc/bvn/%d',
    ];

    public function __construct()
    {
        $this->live = app()->environment(['production']);

        $this->encrypter = new Encrypter;

        $this->client = new Client([
            'base_uri' => $this->live ?
                                    config('rave.uris.sandbox') :
                                    config('rave.uris.live'),
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept'       => 'application/json'
            ]
        ]);

        $this->pubKey = config('rave.keys.public');

        $this->secKey = config('rave.keys.secret');
    }

    /**
     * Charge card payment
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
