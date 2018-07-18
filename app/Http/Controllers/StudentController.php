<?php

namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    public function dashboard(){
        return view('student.index');
    }   
    public function available(){
        return view('student.available');
    }
    public function inprogress(){
        return view('student.inprogress');
    }
    public function completed(){
        return view('student.completed');
    }
    public function purchased(){
        return view('student.purchased');
    }
    public function inrevision(){
        return view('student.inrevision');
    }
}
