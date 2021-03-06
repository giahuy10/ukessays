<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PHPZen\LaravelRbac\Traits\Rbac;

class User extends Authenticatable
{
    use Notifiable;
    use Rbac;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function assignments()
    {
        return $this->hasMany('App\Assignment','created_by','id');
    }
    public function jobs()
    {
        return $this->hasMany('App\Assignment','taken_by','id');
    }
    public function level()
    {
        return $this->hasOne('App\WriterLevel','id','status');
    }
    public function profile()
    {
        return $this->hasOne('App\Profile','user_id','id');
    }
}
