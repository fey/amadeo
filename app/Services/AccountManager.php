<?php

namespace App\Services;

use App\Gamedata\Account;
use DomainException;

class AccountManager
{
    private $account;
    public function __construct(Account $account)
    {
        $this->account = $account;
    }
    public function passwordEncode($pass, $type = "sha1")
    {
        if ($type == "wirlpool") {
            return base64_encode(hash("whirlpool", $pass, true));
        } else {
            return base64_encode(pack("H*", sha1(utf8_encode($pass))));
        }
    }

    public function createAccount(string $login, string $password): Account
    {
        $account = new Account();
        $account->login = $login;
        $account->password = $this->passwordEncode($password);

        return $account;
    }


    public function saveAccount(Account $account)
    {
        if ($account->save()) {
            throw new DomainException('Could not save account');
        }
    }
}
