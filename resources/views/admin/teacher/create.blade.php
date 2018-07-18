@extends('layouts.admin')
@section('header')
    Create 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('category.store')}}" method="post">
        @csrf
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Name</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="description">Description</label>
                <div class="col-md-9">
                    <textarea class="form-control" id="description" name="description" placeholder="Please enter your message here..." rows="5"></textarea>
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