<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $fillable = [
        'user_id', 'amount', 'status','note'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');

    }
    public function order()
    {
        return $this->hasOne('App\Assignment','id','itemid');
    }
}
