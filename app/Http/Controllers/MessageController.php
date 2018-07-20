<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Assignment;
use App\MessageHeader;
use Auth;
class MessageController extends Controller
{
    public function index()
    {
        $assignements = Assignment::paginate(2);

        return view('assignment.index',["assignments"=> $assignements]);
    }
    
    public function show()
    {
        $headers = MessageHeader::where('from_id', Auth::user()->id)->orWhere('to_id', Auth::user()->id)->get();

        return view('message.show',compact('headers'));
    }
    public function detail($id)
    {
        $header = MessageHeader::find($id);
        
        if ($header->from_id != Auth::user()->id && $header->to_id != Auth::user()->id && Auth::user()->user_type != 102) {
            return redirect('/')->with('warning','You do not have permission to see this private chat');

        }
        $headers = MessageHeader::where('from_id', Auth::user()->id)->orWhere('to_id', Auth::user()->id)->get();

        $messages = Message::where('header_id',$id)->orderBy('created_at','asc')->get();
        return view('message.show',compact('headers','messages','header'));
    }
    public function store(Request $request)
    {
        
        if (!$request->created_message) {

            // Create header message
            $header = new MessageHeader();
            $header->from_id = $request->from;
            $header->to_id = $request->to;
            $header->subject= $request->subject;
            $header->assignment_id = $request->assignment_id;
            $header->status = 1;
            $header->save();
            $header_id = $header->id;

            // UPdate assignment
            $assignment = Assignment::find($request->assignment_id);
            $assignment->created_message = $header_id;
            $assignment->save();
        }else {
            $header_id = $request->created_message;
        }

        $message = new Message;

        $message->header_id = $header_id;
        $message->message = $request->message;
        $message->from = $request->from;
        $message->to = $request->to;
        $message->status = 0;
        $message->save();
        //return view('assignment.show',["assignment"=> Assignment::findOrFail($request->assignment_id)]);
        if ($request->frominbox) {
            return redirect()->route('message.detail', ['id' => $header_id]);

        }
        return redirect()->route('assignment.show', ['id' => $request->assignment_id]);
        
    }
    public function destroy()
    {
        
    }
    public function toadmin()
    {
        return view('message.toadmin');
    }
    public function storetoadmin(Request $request)
    {
        // Create header message
        $header = new MessageHeader();
        $header->from_id = Auth::user()->id;
        $header->to_id = 1;
        $header->subject= $request->subject;
        $header->assignment_id = 0;
        $header->status = 1;
        $header->save();
        $header_id = $header->id;

        $message = new Message;

        $message->header_id = $header_id;
        $message->message = $request->message;
        $message->from = Auth::user()->id;
        $message->to = 1;
        $message->status = 0;
        $message->save();

        return redirect()->route('message.detail', ['id' => $header_id]);


    }
}
