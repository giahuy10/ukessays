@extends('layouts.app')

@section('content')

<section id="chatting-page">
		<div class="container">
			<a href="{{route('message.toadmin')}}" class="btn btn-info">Send message to administrator</a><br><br>
			<div class="chatting-page">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4 order-sm-1 order-2">
						<div class="chat-freelancers">
							{{-- <div class="search">
								<input type="text" class="form-control" placeholder=" web design">
							</div>
							<div class="menu">
								<ul class="nav nav-tabs">
									<li><a data-toggle="tab" href="#inbox" aria-selected="true">Inbox</a></li>
									<li><a data-toggle="tab" href="#unread" aria-selected="true">Unread</a></li>
									<li><a data-toggle="tab" href="#archived" aria-selected="true">Archived</a></li>
								</ul>
							</div> --}}
							<div class="tab-content">
								<div class="tab-pane fade show active" id="inbox">	
									<div class="users">
										<ul>
                                            @foreach ($headers as $header_item) 
                                                <li class="{{isset($header->id) && $header_item->id == $header->id ? 'active' : ''}}">
                                    
                                                    <div class="user-details">
                                                        <a href="{{route('message.detail',['id'=>$header_item->id])}}">{{$header_item->subject}}</a>
                                                        From: {{$header_item->latestMessage->fromuser->name}}<br>
                                                        {{date("H:i M d",strtotime($header_item->latestMessage->created_at))}}
                                                    </div>
                                                </li>
                                            @endforeach
											
										</ul>
									</div>
								</div>
								<div class="tab-pane fade" id="unread">	
									<div class="users">
										<ul>
											<li>
												<div class="user-img">
													<img src="img/chat/user-6.jpg" alt="">
													<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
												</div>
												<div class="user-details">
													<a href="#">Jenelia</a>
													<a href="#">Google Write Code</a>
												</div>
											</li>
											
										</ul>
									</div>
								</div>
								<div class="tab-pane fade" id="archived">	
									<div class="users">
										<ul>
											<li>
												<div class="user-img">
													<img src="img/chat/user-2.jpg" alt="">
													<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
												</div>
												<div class="user-details">
													<a href="#">John65</a>
													<a href="#">Write Some Software</a>
												</div>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
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
                                            
                                            <button type="submit" class="btn btn-pure btn-default icon message-send waves-effect waves-light waves-round"></button>
                                            
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
