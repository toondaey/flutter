<?php

namespace App\Payments\Rave;

class Encrypter
{
    public function getKey(string $seckey): string
    {
        $hashedkey = md5($seckey);
        $hashedkeylast12 = substr($hashedkey, -12);

        $seckeyadjusted = str_replace("FLWSECK-", "", $seckey);
        $seckeyadjustedfirst12 = substr($seckeyadjusted, 0, 12);

        $encryptionkey = $seckeyadjustedfirst12.$hashedkeylast12;

        return $encryptionkey;
    }

    public function encrypt3Des(string $data, string $key): string
    {
        $encData = openssl_encrypt($data, 'DES-EDE3', $key, OPENSSL_RAW_DATA);

        return base64_encode($encData);
    }
}
