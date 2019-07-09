<?php

namespace App\Gamedata;

use App\GamedataModel;

/**
 * App\Gamedata\Armor
 *
 * @property string $table
 * @property int $item_id
 * @property string|null $name
 * @property string $bodypart
 * @property string $crystallizable
 * @property string $armor_type
 * @property int $weight
 * @property string $material
 * @property string $crystal_type
 * @property int $avoid_modify
 * @property int $duration
 * @property int|null $lifetime
 * @property int $p_def
 * @property int $m_def
 * @property int $mp_bonus
 * @property int $price
 * @property int|null $crystal_count
 * @property string $sellable
 * @property string $dropable
 * @property string $destroyable
 * @property string $tradeable
 * @property string $skills_item
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereArmorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereAvoidModify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereBodypart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereCrystalCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereCrystalType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereCrystallizable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereDestroyable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereDropable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereLifetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereMDef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereMaterial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereMpBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor wherePDef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereSellable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereSkillsItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereTradeable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armor whereWeight($value)
 * @mixin \Eloquent
 */
class Armor extends GamedataModel
{
    protected $table = 'armor';
}
