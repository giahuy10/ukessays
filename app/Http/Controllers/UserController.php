<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function active($id){
        $user = User::findOrFail($id);
        $user->status = 1;
        $user->save();
        return back();
    }
    public function deactive($id) {
        $user = User::findOrFail($id);
        $user->status = 0;
        $user->save();
        return back();
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }
    public function top10(){
        $users = User::where('user_type',2)->orderBy('rating','desc')->offset(0)->limit(10)->get();
        return view('writer.top10',compact('users'));
    }
    public function activeuser($code){
        $user = User::where('confirm_code', $code);
        
        if ($user->count() > 0) {
            $user->update([
                'status' => 1,
                'confirm_code' => ""
            ]);
            $status = "success";
            $notification_status = 'Your account is verified';
            //auth()->login($user);

        } else {
            $status = "warning";
            $notification_status ='Verify code is invaild';
        }
        return redirect('/')->with($status, $notification_status);
    }
    
}
