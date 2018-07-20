<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $fillable = ['coupon_id','code','is_used','used_time','used_order','used_customer','code_type'];
    public function coupon()
    {
        return $this->belongsTo('App\Coupon','coupon_id','id');

    }
}
