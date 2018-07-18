@extends('layouts.app')

@section('content')
<div class="container">
    <div class="list-message">
        @foreach ($messages as $message) 
            <div class="message">
                {{$message->id}}
            </div>
            
        @endforeach
    </div>
    
</div>
@endsection

@section('script')

@endsection
