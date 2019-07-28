<?php

namespace App\Services\Accounts;

use App\Gamedata\Account;
use DomainException;
use Illuminate\Database\QueryException;
use App\User;
use App\Services\Accounts\AccountsUserPivot;
use Illuminate\Database\Eloquent\Builder;

class AccountManager
{
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
        $this->saveAccount($account);

        return $account;
    }


    public function saveAccount(Account $account)
    {
        try {
            if (! $account->save()) {
                throw new DomainException('Could not save account');
            }
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                throw new DomainException('account name is busy');
            }
        }
    }

    public function getUserAccounts(User $user): Builder
    {
        $pivotLogins = AccountsUserPivot::whereUserId($user->id)->get();
        $accounts = Account::whereIn('login', $pivotLogins->pluck('login'));
        return $accounts;
    }
}
