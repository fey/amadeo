<?php

namespace App\Gamedata;

use App\GamedataModel;

/**
 * App\Gamedata\Armorset
 *
 * @property string $table
 * @property int $id
 * @property int $chest
 * @property int $legs
 * @property int $head
 * @property int $gloves
 * @property int $feet
 * @property int $skill_id
 * @property bool $skill_lvl
 * @property int $skillset_id
 * @property int $shield
 * @property int $shield_skill_id
 * @property int $enchant6skill
 * @property int $mw_chest
 * @property int $mw_legs
 * @property int $mw_head
 * @property int $mw_gloves
 * @property int $mw_feet
 * @property int $mw_shield
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereChest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereEnchant6skill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereFeet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereGloves($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereHead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereLegs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereMwChest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereMwFeet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereMwGloves($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereMwHead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereMwLegs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereMwShield($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereShield($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereShieldSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereSkillLvl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Armorset whereSkillsetId($value)
 * @mixin \Eloquent
 */
class Armorset extends GamedataModel
{
    protected $table = 'armorsets';
}
