<?php

namespace App\Services\Accounts;

use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Gamedata\Account;

class AccountsUserPivot extends Pivot
{
    protected $connection = 'laravel';
    protected $table = 'account_user';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function accounts()
    {
        return $this->belongsTo(Account::class, 'login', 'login');
    }
}
