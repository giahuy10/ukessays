@extends('layouts.admin')

@section('header')
    Coupons
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{route('coupon.create')}}" class="btn btn-info">Create</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Coupon</th>
                <th>Available date</th>
                <th>Expire Date</th>
                <th>Value</th>
                <th>Code</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><a href="{{route('coupon.edit',['id'=>$item->id])}}">{{$item->name}}</a></td>
                    <td>{{$item->available_date}}</td>
                    <td>{{$item->expire_date}}</td>
                    <td>{{$item->amount}} {{$item->type == 1 ? "%" : "$"}}</td>
                    <td>{{$item->one_user == 1 ? $item->fixed_code : "Multi codes"}}</td>
                    <td>
                        <form onsubmit="return confirm('Do you really want to remove this item?');" action="{{route('coupon.destroy',['coupon'=>$item->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $items->links() }}

@endsection

@section('script')

@endsection