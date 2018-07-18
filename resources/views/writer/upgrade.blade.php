@extends('layouts.app')

@section('content')
<div class="container">
    <div class="experience-level">
        <p class="info-title">Writer Level</p>
        <form class=" " method="POST" id="payment-form"  action="{{route('pay')}}">
                {{ csrf_field() }}
        <div class="row">
            
            @foreach ($levels as $level) 
            <div class="col-sm-12 col-md-3 col-lg-3 xpbox">
                <input class="form-control" name="id" id="level-{{$level->id}}" type="radio" value="{{$level->id}}">
                <label for="level-{{$level->id}}">
                    <div class="header">{{$level->name}}</div>
                    <div class="body">
                        {{$level->description}}
                        <span class="symbols">${{$level->price}}</span>
                    </div>
                </label>
            </div>
            @endforeach 
            
            <input name="type" type="hidden" value="2"></p>
            <div class="post-job-btn">
                <button type="submit" class="button-ymp">Upgrade now</button>
            </div>
            
        </div>
        </form>
    </div>
    
</div>
@endsection

@section('script')

@endsection
