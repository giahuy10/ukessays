@extends('layouts.app')

@section('content')
<div class="container">
    @if ($correct >= 11)
    <p></p><p></p>
        <div class="alert alert-success">
            <p>You passed {{$correct}} questions. You can continue to do <a href="{{route('test.topic')}}">Essay Topic Test</a> to complete registration.</p>
            <p>Essay will take 40 minutes to write a 500 words based on random topic.</p>
        </div>
    @else
        <div class="alert alert-danger">
            <p>Sorry! You only passed {{$correct}} questions.</p>
        </div>
    @endif
</div>
@endsection 