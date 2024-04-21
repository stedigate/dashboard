<?php

namespace App\Components\Security;

use phpseclib3\Crypt\RSA;

class Encryption
{
    private $publicKeyFile;
    private $privateKeyFile;

    public function __construct($publicKeyFile, $privateKeyFile)
    {
        $this->publicKeyFile = $publicKeyFile;
        $this->privateKeyFile = $privateKeyFile;
    }

    public function generate($password)
    {
        $rsa = RSA::createKey(4096);
        $keys = $rsa->createKey()->withPassword($password)->withPadding(RSA::ENCRYPTION_OAEP);
        file_put_contents($this->publicKeyFile, $keys['publickey']);
        file_put_contents($this->privateKeyFile, $keys['privatekey']);
    }

    public function encrypt(array $data)
    {
        $rsa = RSA::loadPublicKey(file_get_contents($this->publicKeyFile));
        return $rsa->encrypt(json_encode($data));
    }

    public function decrypt(string $data, string $password)
    {
        $rsa = RSA::loadPrivateKey(file_get_contents($this->privateKeyFile), $password);
        return json_decode($rsa->decrypt($data), true);
    }
}
