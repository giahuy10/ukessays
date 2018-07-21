<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $statistic = array();
        $statistic['writers'] = \App\User::where('user_type',2)->where('status','>=',1)->count();
        $statistic['students'] = \App\User::where('user_type',1)->where('status',1)->count();
        $statistic['total_orders'] = \App\Assignment::where('status','>=',1)->count();
        $statistic['total_amount'] = \App\Assignment::where('status','>=',1)->sum('price');
        $statistic['new_orders'] = \App\Assignment::where('status','>=',1)->where('paid',0)->count();
        $statistic['paid_orders'] = \App\Assignment::where('status','>=',1)->where('paid',1)->count();
        $statistic['new_amount'] = \App\Assignment::where('status','>=',1)->where('paid',0)->sum('price');
        $statistic['paid_amount'] = \App\Assignment::where('status','>=',1)->where('paid',1)->sum('price');

        return view('admin.dashboard',compact('statistic'));
    }
    public function assignment()
    {
        return view('admin.order');
    }
    public function student()
    {
        return view('admin.student');
    }
    public function writer()
    {
        return view('admin.writer');
    }
    public function finance()
    {
        return view('admin.finance');
    }
   
  
}
