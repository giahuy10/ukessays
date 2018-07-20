@extends('layouts.admin')
@section('header')
    Create 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('finance.store')}}" method="post">
        @csrf
        <fieldset>
            <!-- Writer input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="user_id">Writer</label>
                <div class="col-md-9">
                    <select name="user_id" id="" class="form-control">
                        @foreach ($writers as $writer)
                            <option value="{{$writer->id}}">{{$writer->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Order input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="itemid">Pay order</label>
                <div class="col-md-9">
                    <select name="itemid" id="itemid" class="form-control">
                        @foreach ($orders as $order)
                            <option value="{{$order->id}}">{{$order->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Amount input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="amount">Amount</label>
                <div class="col-md-9">
                    <input id="amount" name="amount" type="text" placeholder="Amount" class="form-control">
                </div>
            </div>
            <input type="hidden" name="type" value="3">
            <input type="hidden" name="status" value="1">
            
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