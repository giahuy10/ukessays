<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'name','answer1','answer2','answer3','answer4','correct'
    ];
}
