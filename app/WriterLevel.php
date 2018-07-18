<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WriterLevel extends Model
{
    protected $fillable = ['name','description','price','rated','maximum_order'];

}
