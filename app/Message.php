<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'assignment_id', 'message', 'from','to','status'
    ];
    public function fromUser()
    {
        return $this->hasOne('App\User','id','from');
    }
    public function toUser()
    {
        return $this->hasOne('App\User','id','to');
    }
}
