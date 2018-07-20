@extends('layouts.admin')

@section('content')
<section id="chatting-page">
	
			<a href="{{route('admin.message.create')}}" class="btn btn-info">Send message to users</a><br><br>
    
            @foreach ($headers as $header) 
                <div class="header-chat">
                    <h3><a href="{{route('admin.message.show',['id'=>$header->id])}}">{{$header->subject}}</a></h3>
                    <b>{{$header->latestMessage->fromUser->name}}</b>: {{$header->latestMessage->message}}
                    <br>
                    <i>{{$header->latestMessage->created_at}}</i>

                </div>
            @endforeach
              
@endsection

@section('script')

@endsection