@extends('layouts.admin')

@section('content')
<section id="chatting-page">
	


<div class="panel panel-default chat">
    <div class="panel-heading">
            <h3>{{$header->subject}}</h3>
        
    </div>
    <div class="panel-body" style="display: block;">
        <ul>
            @foreach ($messages as $message)
            <li class="{{Auth::user()->id == $message->from ? 'left' : 'right'}} clearfix"><span class="chat-img pull-{{Auth::user()->id == $message->from ? 'left' : 'right'}}">
                <img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle">
                </span>
                <div class="chat-body clearfix">
                    <div class="header"><strong class="primary-font">{{$message->fromUser->name}}</strong> <small class="text-muted">{{$message->created_at}}</small></div>
                    <p>{{$message->message}}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <form action="{{route('admin.message.reply')}}" method="post">
    <div class="panel-footer">
        <div class="input-group">
            
            @csrf
            <input type="hidden" name="header_id" value="{{$header->id}}">
            <input type="hidden" name="from" value="{{Auth::user()->id}}">
            <input type="hidden" name="to" value="{{Auth::user()->id == $message->from ? $message->to : $message->from}}">
            <input id="btn-input" type="text" name="message" class="form-control input-md" placeholder="Type your message here..."><span class="input-group-btn">
                <button class="btn btn-primary btn-md" id="btn-chat">Send</button>
        </span></div>
    </div>
</form>
</div>
              
@endsection

@section('script')

@endsection