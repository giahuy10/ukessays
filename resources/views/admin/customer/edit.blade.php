@extends('layouts.admin')
@section('header')
    Update {{$item->name}} 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('customer.update',['customer'=>$item->id])}}" method="POST">
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

            <!-- Email input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="email">Email</label>
                <div class="col-md-9">
                    <input id="email" name="email" type="email" value="{{$item->email}}" placeholder="Email" class="form-control">
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="email">Password</label>
                <div class="col-md-9">
                    <input id="password" name="password" type="password"  placeholder="Leave blank if don't want to change Password" class="form-control">
                </div>
            </div>

            <!-- Confirm password input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="confirmed">Confirm password</label>
                <div class="col-md-9">
                    <input id="email" name="confirmed" type="password"  placeholder="Confirm password" class="form-control">
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