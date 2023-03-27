<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    protected $appends = [
        'online_format',
        'type_format'
    ];

    const ADMIN = 1; // 管理员
    const LEADER = 2; // 组长
    const NORMAL = 3; // 客服

    public static $TYPE = [
        self::ADMIN => '管理员',
        self::LEADER => '组长',
        self::NORMAL => '客服',

    ];

    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'nick_name',
        'type',
        'group_id',
        'online',
        'password',
        'job',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];


    public function getOnlineFormatAttribute(){
        if($this->attributes['online']){
            return '<span style="color: #0da357">在线</span>';
        }
        return '<span style="color: #969696">离席</span>';
    }

    public function getTypeFormatAttribute(){
        return self::$TYPE[$this->attributes['type']];
    }
}
