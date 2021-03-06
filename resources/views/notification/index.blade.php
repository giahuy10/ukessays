@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Notifications</h2>
    <br>
    <div class="list-notice">
        @foreach ($notifications as $notice)
        <div class="notice">
            <h4><a href="{{route('notification.show',['id'=>$notice->id])}}">{{$notice->subject}}</a></h4>
            <i>{{$notice->created_at}}</i>
        </div>
        @endforeach
    </div>
</div>
@endsection