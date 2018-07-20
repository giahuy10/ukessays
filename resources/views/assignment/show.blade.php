@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="bidding-page">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="bidding-title">
                    <h3>{{$assignment->name}}</h3>
                </div>
            </div>
        </div>
        <div class="bidding-header">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="bidding-info">
                    <div class="bidding-details">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="bid-info">
                                    
                                    <div class="budget">
                                        <h5>Budget(USD)</h5>
                                        <h3 class="amount">${{Auth::user()->user_type == 2 ? $assignment->price*0.4 : $assignment->price}}</h3>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="open-button">
                                    <h3>{{$assignment->statustext}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
                <div class="project-description">
                    <h4 class="title">Description</h4>
                    <div>{{$assignment->description}}</div>
                    @if (!$assignment->taken_by && Auth::user()->user_type == 2)
                        @cannot('pick', $assignment)
                            <br>
                            <div class="alert alert-warning">
                                Your {{Auth::user()->level->name}} only can pick orders bellow ${{Auth::user()->level->maximum_order}}. Please <a href="{{route('writer.upgrade')}}">upgrade your level</a> to pick this order.
                            </div>
                        @else
                            <br>
                            <form method="POST"  action="{{ route('assignment.pick',['id' => $assignment->id]) }}">
                                    @csrf
                            <button class="btn btn-info">Pick this order now!</button>
                            </form>
                        @endcannot
                        
                    @endif
                </div>
                
                
                
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="employee-info">
                    <h4 class="title">Other information</h4>
                    
                    Category: <b>{{isset($assignment->category->name) ? $assignment->category->name : ""}}</b> <br>     
                    Deadline: <b>{{isset($assignment->deadline) ? $assignment->deadline : ""}}</b> <br> 
                    Level: <b>{{isset($assignment->levelf->name) ? $assignment->levelf->name : ""}}</b> <br>
                    Number of pages: <b>{{isset($assignment->pages) ? $assignment->pages : ""}}</b> <br>    
                    Spacing: <b>{{$assignment->spacing == 1 ? "Double Spaced" : "Single Spaced"}}</b> <br>
                    Academic Level: <b>{{isset($assignment->academic->name) ? $assignment->academic->name : ""}}</b> <br>
                    Style: <b>{{isset($assignment->stylef->name) ? $assignment->stylef->name : ""}}</b> <br>
                    Language style: <b>{{isset($assignment->languagef->name) ? $assignment->languagef->name : ""}}</b> <br>
                    Number of resoures: <b>{{isset($assignment->sources) ? $assignment->sources : ""}}</b> <br>


                </div>
            </div>
        </div>
    
        @if ($assignment->taken_by)
                <hr>   
            <div class="row">
                <div class="col-sm-12 col-md-6" style="border-right: 1px solid #ccc; ">
                        <div class="proposal">
                            <h4 class="title">Messages box</h4>    
                        </div>
                        <div class="chat-panel" id="chat-panel">
                            @foreach ($assignment->messages as $message)
                            
                            <div class="chat {{$message->from == Auth::user()->id ? "chat-left" : ""}}">
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
                            
                            
                        </div>
                        <div class="chat-panel-footer">
                            <form method="POST"  action="{{ route('message.store') }}">
                                @csrf
                                <div class="input-group form-material">
                                    <input type="text" class="form-control" name="message" placeholder="Enter your message">
                                    <input type="hidden" name="assignment_id" value="{{$assignment->id}}">
                                    <input type="hidden" name="subject" value="{{$assignment->name}}">
                                    <input type="hidden" name="created_message" value={{$assignment->created_message}}>
                                    <input type="hidden" name="from" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="to" value="{{Auth::user()->id == $assignment->created_by ? $assignment->taken_by : $assignment->created_by}}">
                                    <span class="input-group-btn">
                                        
                                        <button type="submit" class="btn btn-pure btn-default icon message-send waves-effect waves-light waves-round"></button>
                                        
                                    </span>
                                </div>
                            </form>
                            <br>
                        </div>
                    
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    
                    
                        <div class="proposal">
                            <form action="{{route('upload')}}" enctype="multipart/form-data" method="POST" class="">
                                {{ csrf_field() }}
                               
                                        <div class="file-upload">
                                            <input id="upload" class="file" type="file" name="file">
                                        </div>  
                                
                                <br>
                                <input type="hidden" name="id" value="{{$assignment->id}}">
                                <button class="btn btn-info">Upload</button>
                            </form>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <h4 class="title">Student documents</h4>
                                    @if ($assignment->attachments)
                                        @foreach ($assignment->attachments as $std_attach)
                                            @if ($std_attach->type == 1)
                                                <div class="attach">
                                                    <a href="{{route('download',['id'=>$std_attach->id])}}">
                                                        {{$std_attach->name}}
                                                    </a>
                                                    @if(Auth::user()->id == $std_attach->created_by)
                                                    <a class="delete" href="{{route('delete',['id'=>$std_attach->id])}}">
                                                        <i class="icofont icofont-trash"></i>
                                                    </a>
                                                    @endif
                                                </div>
                                            @endif 
                                        @endforeach
                                    @endif
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <h4 class="title">Writer documents</h4>
                                    @if ($assignment->attachments)
                                        @foreach ($assignment->attachments as $wrt_attach)
                                            @if ($wrt_attach->type == 2)
                                                <div class="attach">
                                                    @if ($assignment->paid || Auth::user()->id == $wrt_attach->created_by)
                                                    <a href="{{route('download',['id'=>$wrt_attach->id])}}">
                                                        {{$wrt_attach->name}}
                                                    </a>
                                                    @else
                                                    {{$wrt_attach->name}}
                                                    @endif
                                                    @if(Auth::user()->id == $wrt_attach->created_by)
                                                    <a class="delete" href="{{route('delete',['id'=>$std_attach->id])}}">
                                                        <i class="icofont icofont-trash"></i>
                                                    </a>
                                                    @endif
                                                </div>
                                            @endif 
                                        @endforeach
                                    @endif
                                    <br>
                                    
                                </div>
                                
                                    
                            </div>
                            @if (Auth::user()->user_type == 1)
                                @if ($assignment->paid)
                                    @if ($assignment->status != 5) 
                                        @if ($assignment->status == 4) 
                                            <div class="alert alert-warning">Documents are in revision. Please wait for writer.</div>
                                        @else
                                            <div class="alert alert-success">Are you satisfied with those documents? <a href="{{route('assignment.complete',['id'=>$assignment->id])}}">Mark this order is completed</a> and give writer rating and feedback. </div>
                                            <div class="alert alert-success">You are not satisfied with those documents? <a href="{{route('assignment.revise',['id'=>$assignment->id])}}">Request revision</a>, we will send message to writer to revise their documents. </div>
                                        @endif
                                    @else
                                        @if (!$assignment->sent_review)
                                            <h3>Rating and review</h3>
                                            <br>
                                            <form class=" " method="POST" id="payment-form"  action="{{route('assignment.review')}}">
                                                    {{ csrf_field() }}
                                                <textarea style="height: 100px;" name="review" id="" cols="30" rows="4"></textarea>
                                                <select name="rating" class="custom-select">
                                                    <option value="5">Perfect</option>
                                                    <option value="4">Very good</option>
                                                    <option value="3">Good</option>
                                                    <option value="2">Not good</option>
                                                    <option value="1">Bad</option>
                                                </select>
                                                <br>
                                                <input name="id" type="hidden" value="{{$assignment->id}}"></p>
                                                <button class="btn btn-success">Send</button>
                                            </form>
                                        @endif
                                    @endif
                                @else
                                    @if ($assignment->status ==3 )
                                        <div class="alert alert-danger">
                                            You have to pay ${{$assignment->price + 10}} (${{$assignment->price}} quoted + $10 fee) to download documents
                                        </div>
                                        <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="{{route('pay')}}">
                                            {{ csrf_field() }}
                                            <input name="id" type="hidden" value="{{$assignment->id}}"></p>
                                            <input name="type" type="hidden" value="1"></p>
                                            <button class="btn btn-success">Pay now</button>
                                        </form>
                                    @else
                                        <br>
                                        <div class="alert alert-warning">
                                            You can discuss with writer via chatbox on your left!
                                        </div>
                                    @endif

                                @endif
                            
                            @endif
                               
                    </div>
                    @if (($assignment->status == 2 || $assignment->status == 4) & Auth::user()->user_type == 2 ) 
                        <br>
                        <form onsubmit="return confirm('Are you sure to finish this job?');" method="POST" id="finish-form"  action="{{route('assignment.finish',['id'=>$assignment->id])}}">
                            {{ csrf_field() }}
                            <input name="id" type="hidden" value="{{$assignment->id}}"></p>
                            <input name="type" type="hidden" value="1"></p>
                            <button class="btn btn-success btn-large">I have finished this job.</button>
                        </form>
                    @endif
                    
                </div>
            </div>
            
        </div>
        @elseif (Auth::user()->user_type == 1 && Auth::user()->id == $assignment->created_by)
        <div class="row">
            <div class="col-sm-12">
                <div class="project-description">
                    <h3>Upload your documents</h3>
                    @if ($assignment->attachments)
                        @foreach ($assignment->attachments as $std_attach)
                            @if ($std_attach->type == 1)
                                <div class="attach">
                                    <a href="{{route('download',['id'=>$std_attach->id])}}">
                                        {{$std_attach->name}}
                                    </a>
                                    @if(Auth::user()->id == $std_attach->created_by)
                                    <a class="delete" href="{{route('delete',['id'=>$std_attach->id])}}">
                                        <i class="icofont icofont-trash"></i>
                                    </a>
                                    @endif
                                </div>
                            @endif 
                        @endforeach
                    @endif
                    <form action="{{route('upload')}}" enctype="multipart/form-data" method="POST" class="">
                        {{ csrf_field() }}
                        
                        <div class="file-upload">
                            <input id="upload" class="file" type="file" name="file">
                        </div>        
                        
                            
                        <br>
                        <input type="hidden" name="id" value="{{$assignment->id}}">
                        <button class="btn btn-info">Upload</button>
                    </form>
                </div>
            </div>
        </div>
            
        @endif
    </div>
</div>
@endsection

@section('script')
<script>
        

        $("#chat-panel").scrollTop($("#chat-panel")[0].scrollHeight);

</script>
@endsection
