@extends('layouts.admin')
@section('header')
    Update {{$item->name}} 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('level.update',['level'=>$item->id])}}" method="POST">
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
            <!-- Price input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="string">Price</label>
                <div class="col-md-9">
                    <input id="string" name="string" type="text" value="{{$item->string}}" placeholder="Price" class="form-control">
                </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="description">Description</label>
                <div class="col-md-9">
                    <textarea class="form-control" id="description" name="description" placeholder="Please enter your message here..." rows="5">{{$item->description}}</textarea>
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