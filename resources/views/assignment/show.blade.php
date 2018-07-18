@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors') }}
        </div>
    @endif
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
                                        <h3 class="amount">${{$assignment->price}}</h3>
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
                    @if (!$assignment->taken_by)
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
                    
                    Student: <b>{{$assignment->student->name}}</b> <br>
                    Category: <b>{{$assignment->category->name}}</b> <br>     
                    Assignment ID: <b>{{$assignment->id}} </b>         
                    
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
                                <div class="file-upload-btn clearfix">
                                    <div class="file-upload">
                                        <label for="upload" class="file-upload__label"><i class="icofont icofont-plus"></i> Upload Files</label>
                                        <input id="upload" class="file-upload__input" type="file" name="file">
                                    </div>
                                    <p>Upload your documents here.</p>
                                </div>
                                <br>
                                <input type="hidden" name="id" value="{{$assignment->id}}">
                                <button class="btn btn-info">Upload</button>
                            </form>
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
                                <div class="alert alert-danger">
                                    You have to pay ${{$assignment->price + 15}} ($20 quoted + $15 fee) to download documents
                                </div>
                                <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="{{route('pay')}}">
                                    {{ csrf_field() }}
                                    <input name="id" type="hidden" value="{{$assignment->id}}"></p>
                                    <input name="type" type="hidden" value="1"></p>
                                    <button class="btn btn-success">Pay now</button>
                                </form>
                            @endif
                            
                        @endif
                               
                        </div>
                    
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
