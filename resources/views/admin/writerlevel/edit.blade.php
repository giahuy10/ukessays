@extends('layouts.admin')
@section('header')
    Update {{$item->name}} 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('writerlevel.update',['writerlevel'=>$item->id])}}" method="POST">
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
                <label class="col-md-2 control-label" for="price">Price</label>
                <div class="col-md-9">
                    <input id="price" name="price" type="text" value="{{$item->price}}" placeholder="Price" class="form-control">
                </div>
            </div>
            <!-- Maximum Order input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="maximum_order">Maximum Order</label>
                <div class="col-md-9">
                    <input id="maximum_order" name="maximum_order" value="{{$item->maximum_order}}" type="text" placeholder="Maximum Order" class="form-control">
                </div>
            </div>
            <!-- Rated input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="rated">Rated</label>
                <div class="col-md-9">
                    <input id="rated" name="rated" type="text" value={{$item->rated}} placeholder="Rated" class="form-control">
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