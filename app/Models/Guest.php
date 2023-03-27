<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Guest extends Authenticatable
{

    protected $appends = [
        'guest_status_format',
    ];

    const ON = 1; // 正常
    const OFF = 0; // 禁用

    public static $GUEST_STATUS = [
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
        'remark',
        'guest_status',
        'upload'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function getGuestStatusFormatAttribute()
    {
        $str = self::$GUEST_STATUS[$this->attributes['guest_status']];
        if ($this->attributes['guest_status']) {
            return '<span style="color:#228a71">' . $str . '</span>';
        }

        return '<span style="color:#969696">' . $str . '</span>';
    }

    public function group(){
        return $this->hasOne('App\Models\Group','id','group_id');
    }

    public function admin(){
        return $this->hasOne('App\Models\Admin','id','admin_id');
    }
}
