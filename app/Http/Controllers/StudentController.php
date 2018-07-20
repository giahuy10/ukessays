<?php

namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;
use App\Assignment;
use Auth;
class StudentController extends Controller
{
    public function dashboard(){
        $assignments = Assignment::where('created_by', Auth::user()->id)->paginate(10);
        return view('student.index',compact('assignments'));
    }   
    public function orders(){

        return view('student.available');
    }
  
    public function purchased(){
        $assignments = Assignment::where(
            [
                ['created_by', Auth::user()->id],
                ['paid', 1]
            ]
            )->paginate(10);
        return view('student.purchased',compact('assignments'));
    }
   
}
