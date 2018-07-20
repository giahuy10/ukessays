@extends('layouts.admin')
@section('header')
    Create 
@endsection
@section('content')
    <form class="form-horizontal" action="{{route('coupon.store')}}" method="post">
        @csrf
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Name</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                </div>
            </div>
            <!-- Available input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="available_date">Available date</label>
                <div class="col-md-9">
                    <input id="available_date" name="available_date" type="date" class="form-control">
                </div>
            </div>
            <!-- Expire input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="expire_date">Expired date</label>
                <div class="col-md-9">
                    <input id="expire_date" name="expire_date" type="date" class="form-control">
                </div>
            </div>
            <!-- Type input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Discount type</label>
                <div class="col-md-9">
                    <select name="type" id="type" class="form-control">
                        <option value="1">Percent</option>
                        <option value="2">Amount</option>
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
            <!-- One code input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Usage</label>
                <div class="col-md-9">
                        <div class="row">                                     
                            <div class="col-xs-12 col-sm-6">
                                <label class="checkbox-btn">One Code every users
                                    <input type="radio" checked value="1" name="one_user">
                                    <span class="checkmark"></span>
                                </label>
                                <br>
                                <i>Create code bellow</i>

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <label class="checkbox-btn">Each code for each user
                                    <input type="radio" value="2" name="one_user" >
                                    <span class="checkmark"></span>
                                </label>
                                <br><i>Save coupon then create codes later</i>
                            </div>
                        </div>
                </div>
            </div>

            <!-- Fixed code input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="fixed_code">Code for every user</label>
                <div class="col-md-9">
                    <input id="fixed_code" name="fixed_code" type="text" placeholder="Code" class="form-control">
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