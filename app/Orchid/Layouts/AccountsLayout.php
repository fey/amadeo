<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\TD;
use Orchid\Screen\Layouts\Table;
use Carbon\Carbon;

class AccountsLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $data = 'accounts';

    /**
     * @return TD[]
     */
    public function fields(): array
    {
        return [
            TD::set('account', 'Login')
                ->align('center')
                ->width('auto')
                ->render(function ($account) {
                    return $account->login;
                }),
            TD::set('lastactive', 'last Active')
            ->align('center')
            ->width('auto')
            ->render(function ($account) {
                return $account->lastactive;
                // return Carbon::createFromTimestamp($account->lastactive)->format('d-m-Y');
            }),
        ];
    }
}
