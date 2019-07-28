<?php

namespace App;

use Orchid\Platform\Models\User as Authenticatable;
use App\Services\Accounts\AccountManager;
use Illuminate\Database\Query\Builder;

/**
 * @property Builder $accounts
 */
class User extends Authenticatable
{
    protected $connection = 'laravel';
    protected $table = 'users';

    public function getAccountsAttribute()
    {
        return (new AccountManager())->getUserAccounts($this);
    }
}
