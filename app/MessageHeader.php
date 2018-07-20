<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Message;
class MessageHeader extends Model
{
    public function messages()
    {
        return $this->hasMany('App\Message','header_id', 'id');
    }
    protected $appends = array('last');
    public function getLastAttribute()
    {
        $last = Message::where('header_id', $this->id)->orderBy('created_at','desc')->first();
        return $last;
    }
    public function latestMessage()
    {
        return $this->hasOne('\App\Message','header_id', 'id')->latest();
    }
    public function assignment()
    {
        return $this->hasOne('\App\Assignment','id','assignment_id');
    }
   
    
}
