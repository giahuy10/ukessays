@extends('layouts.admin')

@section('header')
    Finances
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Assignment</th>
                <th>Created date</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->user->name}}</td>
                    <td>
                        @if ($item->type == 1)
                            Buy Order
                        @elseif ($item->type==2)
                            Buy Level
                        @else
                            Pay writer
                        @endif
                    </td>
                    <td>${{$item->amount}}</td>
                    <td>{{isset($item->order->name) ? $item->order->name : $item->itemid}}</td>
                    <td>{{date("Y-m-d",strtotime($item->created_at))}}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $items->links() }}

@endsection

@section('script')

@endsection