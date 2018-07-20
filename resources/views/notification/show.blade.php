@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{$notification->subject}}</h2>
    {{$notification->created_at}}
    <br>
    <div class="notice-detail">
       {{$notification->message}}
    </div>
    @if ($notification->attachment)
        <h3>Attachment</h3>
        <a href="{{App::make('url')->to('/')}}/attachments/{{$notification->attachment}}">{{$notification->attachment}}</a>
    @endif
</div>
@endsection