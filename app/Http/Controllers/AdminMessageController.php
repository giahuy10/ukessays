<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\MessageHeader;
use Auth;
use App\Notification;
class AdminMessageController extends Controller
{
    
    public function index()
    {
        $headers = MessageHeader::where('from_id', Auth::user()->id)->orWhere('to_id', Auth::user()->id)->paginate(20);
        
        return view('admin.message.index',compact('headers'));
    }
    public function create()
    {
        $users = \App\User::where('status','>','0')->get();
        return view('admin.message.create',compact('users'));
    }
    public function show($id)
    {
        $header = MessageHeader::find($id);
        //$headers = MessageHeader::where('from_id', Auth::user()->id)->orWhere('to_id', Auth::user()->id)->get();
        $messages = Message::where('header_id',$id)->orderBy('created_at','asc')->get();
        return view('admin.message.show',compact('messages','header'));
    }
    
    public function store(Request $request){
        
        
        
        foreach ($request->users as $user_id) {
            $notice = new Notification;
            $notice->user_id = $user_id;
            $notice->message = $request->message;
            $notice->subject = $request->subject;
            $notice->status = 1;
            $notice->save();
           
        }
        
       
        return redirect()->route('admin.message')->with('success','Notifications are sent to users!');
        
    }
    public function reply(Request $request){
        $message = new Message();
        $message->header_id = $request->header_id;
        $message->message = $request->message;
        $message->from = $request->from;
        $message->to = $request->to;
        $message->status = 0;
        $message->save();
        return redirect()->route('admin.message.show',["id"=>$request->header_id]);
    }
}
