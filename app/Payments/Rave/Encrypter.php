<?php

namespace App\Payments\Rave;

class Encrypter
{
    public static $key;

    /**
     * Initiate encryption class.
     *
     * @param string $secKey
     */
    public function __construct()
    {
        static::$key = static::getKey(config('rave.keys.secret'));
    }

    /**
     * Make ecryption key.
     *
     * @param  string $seckey Flutter public key
     * @return string
     */
    public static function getKey(string $seckey): string
    {
        $hashedkey = md5($seckey);
        $hashedkeylast12 = substr($hashedkey, -12);

        $seckeyadjusted = str_replace("FLWSECK-", "", $seckey);
        $seckeyadjustedfirst12 = substr($seckeyadjusted, 0, 12);

        $encryptionkey = $seckeyadjustedfirst12.$hashedkeylast12;

        return $encryptionkey;
    }

    /**
     * Encrypt flutter data.
     *
     * @param  string $data
     * @param  string $key  Public key generated above.
     * @return string
     */
    public static function encrypt3Des(string $data): string
    {
        $encData = openssl_encrypt($data, 'DES-EDE3', static::$key, OPENSSL_RAW_DATA);

        return base64_encode($encData);
    }
}
