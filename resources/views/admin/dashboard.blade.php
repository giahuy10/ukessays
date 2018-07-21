@extends('layouts.admin')

@section('content')
<div class="panel panel-container">
    <div class="row">
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                    <div class="large">{{$statistic['total_orders']}}</div>
                    <div class="text-muted">Total orders</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
                        <div class="large">${{$statistic['total_amount']}}</div>
                        <div class="text-muted">Total amount</div>
                    </div>
                </div>
            </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-blue panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
                    <div class="large">{{$statistic['students']}}</div>
                    <div class="text-muted">Total Students</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-orange panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                    <div class="large">{{$statistic['writers']}}</div>
                    <div class="text-muted">Total writers</div>
                </div>
            </div>
        </div>
        
    </div><!--/.row-->
</div>

<div class="row">
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>New Orders</h4>
                <p>{{$statistic['new_orders']}}</p>
                <div class="easypiechart" id="easypiechart-blue" data-percent="{{$statistic['new_orders']/$statistic['total_orders']*100}}" ><span class="percent">{{$statistic['new_orders']/$statistic['total_orders']*100}}%</span></div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Paid orders</h4>
                <p>{{$statistic['paid_orders']}}</p>
                <div class="easypiechart" id="easypiechart-orange" data-percent="{{$statistic['paid_orders']/$statistic['total_orders']*100}}" ><span class="percent">{{$statistic['paid_orders']/$statistic['total_orders']*100}}%</span></div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>New Amount</h4>
                <p>${{$statistic['new_amount']}}</p>
                <div class="easypiechart" id="easypiechart-teal" data-percent="{{$statistic['new_amount']/$statistic['total_amount']*100}}" ><span class="percent">{{$statistic['new_amount']/$statistic['total_amount']*100}}%</span></div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Paid Amount</h4>
                <p>${{$statistic['paid_amount']}}</p>
                <div class="easypiechart" id="easypiechart-red" data-percent="{{$statistic['paid_amount']/$statistic['total_amount']*100}}" ><span class="percent">{{$statistic['paid_amount']/$statistic['total_amount']*100}}%</span></div>
            </div>
        </div>
    </div>
</div><!--/.row-->


@endsection

@section('script')
@endsection