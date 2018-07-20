<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use App\Assignment;
class WriterController extends Controller
{
    public function dashboard(){
        return view('writer.index');
    }
    public function buyLevel(){

    }
    public function store(Request $request)
    {
        

    }
    public function storeprofile(Request $request)
    {
        
            
            $profile = Profile::where('user_id',Auth::user()->id)->first();

            $sample1 = $request->file('sample1');
            $sample1->move(public_path('samples'),$profile->id."-sample1-".$sample1->getClientOriginalName());
            
            $sample2 = $request->file('sample2');
            $sample2->move(public_path('samples'),$profile->id."-sample2-".$sample2->getClientOriginalName());

            $sample3 = $request->file('sample3');
            $sample3->move(public_path('samples'),$profile->id."-sample3-".$sample3->getClientOriginalName());

            $avatar = $request->file('avatar');
            $avatar->move(public_path('avatars'),$profile->id."-".$avatar->getClientOriginalName());

            $certificate = $request->file('certification');
            $certificate->move(public_path('certificates'),$profile->id."-".$certificate->getClientOriginalName());
            
            $profile->sample1 = $profile->id."-sample1-".$sample1->getClientOriginalName();
            $profile->sample2 = $profile->id."-sample2-".$sample2->getClientOriginalName();
            $profile->sample3 = $profile->id."-sample3-".$sample3->getClientOriginalName();
            $profile->avatar = $profile->id."-".$avatar->getClientOriginalName();
            $profile->certification = $profile->id."-".$certificate->getClientOriginalName();
            
            $profile->categories = json_encode($request->categories);
            $profile->phone_number = $request->phone_number;
            $profile->description = $request->description;
            $profile->paypal_email = $request->paypal_email;
           // $profile->avatar = $request->avatar;
            $profile->education = $request->education;
           // $profile->certification = $request->certification;
            $profile->save();
            
            return redirect('/')->with('success','Profile is updated!');
        
        
    }
    public function updateprofile()
    {
        $profile = Profile::where('user_id',Auth::user()->id)->first();
        $categories = \App\Category::all();
        return view('writer.updateprofile',compact('profile','categories'));

    }
    public function inprogressJobs()
    {
        $jobs = Assignment::whereNull('pay_writer')->where('taken_by', Auth::user()->id)->paginate(15);
        return view('writer.inprogress',compact('jobs'));
    }
    public function totalJobs()
    {
        $jobs = Assignment::where('taken_by', Auth::user()->id)->paginate(15);
        return view('writer.total',compact('jobs'));

    }
    public function completedJobs()
    {
        $jobs = Assignment::whereNotNull('pay_writer')->where('taken_by', Auth::user()->id)->paginate(15);

        return view('writer.completed',compact('jobs'));
        
    }
}
