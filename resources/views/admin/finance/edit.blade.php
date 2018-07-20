@extends('layouts.admin')
@section('header')
    Update {{$item->name}} 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('style.update',['style'=>$item->id])}}" method="POST">
        @csrf
        @method('PUT')

        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Name</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" value="{{$item->name}}" placeholder="Name" class="form-control">
                </div>
            </div>
           
            <!-- Form actions -->
            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <button type="submit" class="btn btn-info btn-md">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>

@endsection

@section('script')
    
@endsection