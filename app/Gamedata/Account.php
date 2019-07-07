<?php

namespace App\Gamedata;

use App\GamedataModel;

/**
 * @property string $table
 * @property string $login
 * @property string $password
 * @property int $lastactive
 * @property int $accessLevel
 * @property string $lastIP
 * @property int  $lastServerId
 * @property int $allowed_ip
 * @property int $allowed_hwid
 * @method mixed whereLogin($login)
 */
class Account extends GamedataModel
{
    protected $table = 'accounts';
}
