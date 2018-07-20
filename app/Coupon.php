<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['name','available_date','expire_date','type','amount','one_user','fixed_code'];
}
