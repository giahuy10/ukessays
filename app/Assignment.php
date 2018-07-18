<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'name', 'deadline', 'price','catid','description','created_by','taken_by','status'
    ];
    protected $appends = array('statustext');

    public function getStatustextAttribute()
    {
        switch ($this->status) {
            case 1:
                $status = "Open";
                break;
            case 2:
                $status = "In progress";
                break;
            case 3:
                $status = "Finished";
                break;
            case 4:
                $status = "In revision";
                break; 
            case 5:
                $status = "Completed";
                break;
            case 6:
                $status = "Sent review";
                break;    
            default:
                $status = "Open";

        }
        return $status;  
    }
    
    public function student()
    {
        return $this->hasOne('App\User','id','created_by');
    }
    public function writer()
    {
        return $this->hasOne('App\User','id','taken_by');
    }
    public function category()
    {
        return $this->hasOne('App\Category','id','catid');
    }
    public function messages()
    {
        return $this->hasMany('App\Message','assignment_id','id');
    }
    public function attachments()
    {
        return $this->hasMany('App\Attachment','assignment_id', 'id');
    }
   
    

}
