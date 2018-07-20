@extends('layouts.app')

@section('content')

<section id="chatting-page">
		<div class="container">
			<p></p><p></p>
			<a href="{{route('message.toadmin')}}" class="btn btn-info">Send message to administrator</a><br><br>
			<p></p><p></p>
			<div class="chatting-page">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4 order-sm-1 order-2">
						<div class="chat-freelancers">
							
						
							<ul>
								@foreach ($headers as $header_item) 
									<li class="{{isset($header->id) && $header_item->id == $header->id ? 'active' : ''}}">
						
										<div class="user-details">
											<p><b><a href="{{route('message.detail',['id'=>$header_item->id])}}">{{$header_item->subject}}</a></b></p>
											<p>From: {{$header_item->latestMessage->fromuser->name}}</p>
											{{date("H:i M d",strtotime($header_item->latestMessage->created_at))}}
										</div>
									</li>
								@endforeach
								
							</ul>
									
							<p></p>
							<p></p>
							
						</div>
					</div>
					<div class="col-sm-12 col-md-8 col-lg-8 order-sm-2 order-1">
                        @if(isset($header))
						<div class="chat-panel">
							
							@foreach ($messages as $message)
                            
                            <div class="chat {{$message->from == Auth::user()->id ? 'chat-left' : ''}} ">
                                <div class="chat-avatar">
                                    <a href="#" data-toggle="tooltip" data-placement="{{$message->from == Auth::user()->id ? "left" : "right"}}" data-original-title="James89"><img src="/img/chat/user-1.jpg" alt=""></a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>{{$message->message}}</p>
                                        <time class="chat-time">{{$message->created_at}}</time>
                                    </div>
                                </div>
                            </div>
                            @endforeach
							
							<div class="chat-panel-footer">
                                <form method="POST"  action="{{ route('message.store') }}">
                                    @csrf
                                    <div class="input-group form-material">
                                        <input type="text" class="form-control" name="message" placeholder="Enter your message">
                                        <input type="hidden" name="assignment_id" value="{{$header->assignment_id}}">
                                        <input type="hidden" name="frominbox" value="1">
                                        <input type="hidden" name="subject" value="{{$header->subject}}">
                                        <input type="hidden" name="created_message" value={{$header->id}}>
                                        <input type="hidden" name="from" value="{{Auth::user()->id}}">
                                        <input type="hidden" name="to" value="{{Auth::user()->id == $header->from_id ? $header->to_id : $header->from_id}}">
                                        <span class="input-group-btn">
                                            
                                            <button type="submit" class="btn btn-pure btn-default icon message-send waves-effect waves-light waves-round">Send</button>
                                            
                                        </span>
                                    </div>
                                </form>
                                <br>
                            </div>
                        </div>
                        @endif
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('script')

@endsection
