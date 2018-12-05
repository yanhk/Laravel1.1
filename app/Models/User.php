<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    //修改对应数据表
    protected $tables = 'users';
    /**
     * The attributes that are mass assignable.
     *  只有包含到该属性中的字段才能被正常更新
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * 在用户实例中被隐藏
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
