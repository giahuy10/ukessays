@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{$notification->subject}}</h3>
    {{$notification->created_at}}
    <br>
    <div class="notice-detail">
       {{$notification->message}}
    </div>
</div>
@endsection