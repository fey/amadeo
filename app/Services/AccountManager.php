<?php

namespace App\Services;

use App\Gamedata\Account;

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
        return $this->account->fillable([
            'login'    => $login,
            'password' => $password,
        ]);
    }

    public function saveAccount(Account $account): bool
    {
        return $account->saveOrFail();
    }
}
