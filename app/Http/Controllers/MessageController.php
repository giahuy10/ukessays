<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Assignment;

class MessageController extends Controller
{
    public function index()
    {
        $assignements = Assignment::paginate(2);

        return view('assignment.index',["assignments"=> $assignements]);
    }
    
    public function show($user_id)
    {
        $messages = Message::select('id','from','to')
                                ->where('from',$user_id)
                                ->orderBy('id','desc')
                                ->groupBy('to')
                                ->get();
        return view('message.show',["messages"=> $messages ]);
    }
    public function store(Request $request)
    {
        $message = new Message;

        $message->assignment_id = $request->assignment_id;
        $message->message = $request->message;
        $message->from = $request->from;
        $message->to = $request->to;
        $message->status = 0;
        $message->save();
        //return view('assignment.show',["assignment"=> Assignment::findOrFail($request->assignment_id)]);
        return redirect()->route('assignment.show', ['id' => $request->assignment_id]);
        
    }
    public function destroy()
    {
        
    }
}
