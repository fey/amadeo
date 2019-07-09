<?php

namespace App\Gamedata;

use App\GamedataModel;

/**
 * App\Gamedata\Character
 *
 * @property string $table
 * @property string|null $account_name
 * @property int $charId
 * @property string $char_name
 * @property bool|null $level
 * @property int|null $maxHp
 * @property int|null $curHp
 * @property int|null $maxCp
 * @property int|null $curCp
 * @property int|null $maxMp
 * @property int|null $curMp
 * @property bool|null $face
 * @property bool|null $hairStyle
 * @property bool|null $hairColor
 * @property bool|null $sex
 * @property int|null $heading
 * @property int|null $x
 * @property int|null $y
 * @property int|null $z
 * @property int|null $exp
 * @property int|null $expBeforeDeath
 * @property int $sp
 * @property int|null $karma
 * @property int $fame
 * @property int|null $pvpkills
 * @property int|null $pkkills
 * @property int|null $clanid
 * @property bool|null $race
 * @property bool|null $classid
 * @property bool|null $base_class
 * @property int|null $deletetime
 * @property bool|null $cancraft
 * @property string|null $title
 * @property bool $rec_have
 * @property bool $rec_left
 * @property bool|null $online
 * @property int|null $onlinetime
 * @property bool|null $char_slot
 * @property int|null $newbie
 * @property int|null $lastAccess
 * @property int|null $clan_privs
 * @property bool|null $wantspeace
 * @property bool $isin7sdungeon
 * @property bool|null $in_jail
 * @property int|null $jail_timer
 * @property bool $nobless
 * @property int $subpledge
 * @property int $last_recom_date
 * @property int $pledge_rank
 * @property bool $lvl_joined_academy
 * @property int $apprentice
 * @property int $sponsor
 * @property bool $varka_ketra_ally
 * @property int $clan_join_expiry_time
 * @property int $clan_create_expiry_time
 * @property int $death_penalty_level
 * @property int $pccaffe_points
 * @property float $isCensor
 * @property float $isBanned
 * @property string|null $hwid
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereApprentice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereBaseClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereCancraft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereCharId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereCharName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereCharSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereClanCreateExpiryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereClanJoinExpiryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereClanPrivs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereClanid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereClassid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereCurCp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereCurHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereCurMp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereDeathPenaltyLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereDeletetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereExpBeforeDeath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereFace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereFame($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereHairColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereHairStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereHwid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereInJail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereIsBanned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereIsCensor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereIsin7sdungeon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereJailTimer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereKarma($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereLastAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereLastRecomDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereLvlJoinedAcademy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereMaxCp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereMaxHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereMaxMp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereNewbie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereNobless($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereOnlinetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character wherePccaffePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character wherePkkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character wherePledgeRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character wherePvpkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereRace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereRecHave($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereRecLeft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereSp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereSponsor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereSubpledge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereVarkaKetraAlly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereWantspeace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gamedata\Character whereZ($value)
 * @mixin \Eloquent
 */
class Character extends GamedataModel
{
    protected $table = 'characters';
}
