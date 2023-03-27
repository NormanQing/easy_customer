<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Group extends Authenticatable
{

    protected $appends = [
        'group_status_format',
    ];

    const ON = 1; // 正常
    const OFF = 0; // 禁用

    public static $GROUP_STATUS = [
        self::ON => '正常',
        self::OFF => '禁用',

    ];

    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'desc',
        'group_status',
        'sort',
        'welcome',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function getGroupStatusFormatAttribute()
    {
        $str = self::$GROUP_STATUS[$this->attributes['group_status']];
        if ($this->attributes['group_status']) {
            return '<span style="color:#228a71">' . $str . '</span>';
        }

        return '<span style="color:#969696">' . $str . '</span>';
    }
}
