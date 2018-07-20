@extends('layouts.admin')
@section('header')
    Create 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('academiclevel.store')}}" method="post">
        @csrf
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Name</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                </div>
            </div>

            <!-- Price input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="price">Price</label>
                <div class="col-md-9">
                    <input id="price" name="price" type="text" placeholder="Price" class="form-control">
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