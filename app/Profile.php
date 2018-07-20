<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Review;
use App\Assignment;
use App\Finance;
class Profile extends Model
{
    protected $appends = array('categoryname','reviews','earned','inprogress','total','total_jobs','inprogress_jobs','completed_jobs');
    protected $fillable = [
        'user_id', 'phone_number', 'description','paypal_email','avatar','education','certification','sample1','sample2','sample3','categories','test_id','test_result'
    ];
    public function getCategoriesAttribute($value){
        return json_decode($value);
    }
    public function getReviewsAttribute(){
        return Review::where('to',$this->user_id)->count(); 
    }
    public function getCategorynameAttribute(){
       
        if ($this->categories) {
            $cat_name = array();
            foreach ($this->categories as $id) {
                $cat = Category::findOrFail($id);
                $cat_name[] = $cat->name;
            }
            return $cat_name;
        }
        return "";
        
    }
    public function getEarnedAttribute()
    {
         $earned =  Finance::where([
             ['user_id',$this->user_id],
             ['status', 1],
             ['type',3]
         ])->sum('amount');
         return number_format($earned,2);
        
    }
    public function getCompletedJobsAttribute()
    {
        return Assignment::whereNotNull('pay_writer')->where('taken_by', $this->user_id)->count();
    }
    public function getInprogressAttribute()
    {
        $inprogress =  Assignment::whereNull('pay_writer')->where('taken_by', $this->user_id)->sum('writer_price');
        return number_format($inprogress,2);
    }
    public function getInprogressJobsAttribute()
    {
        return Assignment::whereNull('pay_writer')->where('taken_by', $this->user_id)->count();
    }
    public function getTotalAttribute()
    {
        $total = Assignment::where('taken_by', $this->user_id)->sum('writer_price');
        return number_format($total,2);
    }
    public function getTotalJobsAttribute()
    {
        return Assignment::where('taken_by', $this->user_id)->count();
    }
}
