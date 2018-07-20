<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Auth;
class NotificationController extends Controller
{
    public function index(){
        $notifications = Notification::where('user_id',Auth::user()->id)->paginate(15);
        return view('notification.index',compact('notifications'));
    }
    public function show($id) {
        $notification = Notification::findOrFail($id);
        return view('notification.show',compact('notification'));
    }
}
