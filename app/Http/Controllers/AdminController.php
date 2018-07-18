<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
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
    public function message()
    {
        return view('admin.message');
    }
}
