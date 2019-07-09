<?php

namespace App\Gamedata;

use App\GamedataModel;

/**
 * App\Gamedata\Account
 *
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Account whereAccessLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Account whereAllowedHwid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Account whereAllowedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Account whereLastIP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Account whereLastServerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Account whereLastactive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Account wherePassword($value)
 * @mixin \Eloquent
 */
class Account extends GamedataModel
{
    protected $table = 'accounts';
    protected $fillable = [
        'login',
        'password'
    ];

    protected $hidden = [
        'password',
        'accessLevel',
        'lastIP',
        'lastServerId',
        'allowed_ip',
        'allowed_hwid',
    ];
}
