@extends('layouts.admin')
@section('header')
    Update {{$item->name}} 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('coupon.update',['coupon'=>$item->id])}}" method="POST">
       
        @method('PUT')
        @csrf
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Name</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" value="{{$item->name}}" placeholder="Name" class="form-control">
                </div>
            </div>
            <!-- Available input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="available_date">Available date</label>
                <div class="col-md-9">
                    <input id="available_date"  value="{{date('Y-m-d', strtotime($item->available_date))}}" name="available_date" type="date" class="form-control">
                </div>
            </div>
            <!-- Expire input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="expire_date">Expired date</label>
                <div class="col-md-9">
                    <input id="expire_date"  value="{{date('Y-m-d', strtotime($item->expire_date))}}" name="expire_date" type="date" class="form-control">
                </div>
            </div>
            <!-- Type input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Discount type</label>
                <div class="col-md-9">
                    <select name="type" id="type" class="form-control">
                        <option value="1" {{$item->type == 1 ? " checked " : ""}}>Percent</option>
                        <option value="2" {{$item->type == 2 ? " checked " : ""}}>Amount</option>
                    </select>
                    
                </div>
            </div>
            <!-- Amount input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="amount">Amount</label>
                <div class="col-md-9">
                    <input id="amount" value="{{$item->amount}}" name="amount" type="text" placeholder="Amount" class="form-control">
                </div>
            </div>
            <!-- One code input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Usage</label>
                <div class="col-md-9">
                        <div class="row">                                     
                            <div class="col-xs-12 col-sm-6">
                                <label class="checkbox-btn">One Code every users
                                    <input type="radio" disabled {{$item->one_user == 1 ? " checked " : ""}} value="1" name="one_user">
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <i>Create code bellow</i>

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <label class="checkbox-btn">Each code for each user
                                    <input type="radio" disabled {{$item->one_user == 2 ? " checked " : ""}} value="2" name="one_user" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                </div>
            </div>
            @if ($item->one_user == 1)
                <!-- Fixed code input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="amount">Code for every user</label>
                    <div class="col-md-9">
                        <input value="{{$item->fixed_code}}" id="fixed_code" name="fixed_code" type="text" placeholder="Code" class="form-control">
                    </div>
                </div>
            @endif

           
            
            <!-- Form actions -->
            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <button type="submit" class="btn btn-info btn-md">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
    @if ($item->one_user == 2)
    <h3>Generate code automatically (ABC123456)</h3>
    <form class="form-horizontal" action="{{route('code.generate',['id'=>$item->id])}}" method="POST">
        @csrf
        <fieldset>
            <!-- Prefix input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="prefix">Prefix</label>
                <div class="col-md-9">
                    <input id="prefix" required name="prefix" type="text" placeholder="ABC" class="form-control">
                </div>
            </div>
            <!-- Code Length input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="length">Code length</label>
                <div class="col-md-9">
                    <input id="length" required name="length" type="number"  placeholder="6" class="form-control">
                </div>
            </div>
            <!-- Numbers input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="number">Number of codes</label>
                <div class="col-md-9">
                    <input id="number" required name="number" type="number" placeholder="10" class="form-control">
                </div>
            </div>
            <!-- Form actions -->
            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <button type="submit" class="btn btn-info btn-md">Generate</button>
                </div>
            </div>
        </fieldset>

    </form>
    @endif
@endsection

@section('script')
    
@endsection