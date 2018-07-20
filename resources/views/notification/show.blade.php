@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{$notification->subject}}</h2>
    {{$notification->created_at}}
    <br>
    <div class="notice-detail">
       {{$notification->message}}
    </div>
</div>
@endsection