<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class GamedataModel extends Model
{
    protected $connection = 'gamedb';
}
