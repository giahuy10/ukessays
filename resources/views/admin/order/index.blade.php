@extends('layouts.admin')

@section('header')
    Orders
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{-- <a href="{{route('category.create')}}" class="btn btn-info">Create</a> --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order Name</th>
                <th>Price</th>
                <th>Student</th>
                <th>Writer</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><a href="{{route('order.edit',['id'=>$item->id])}}">{{$item->name}}</a></td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->student->name}}</td>
                    <td>{{isset($item->writer->name) ? $item->writer->name : "" }}</td>
                    <td>{{$item->statustext}}</td>
                    <td>
                        @if ($item->status == 1)
                        <form onsubmit="return confirm('Do you really want to remove this item?');" action="{{route('order.destroy',['order'=>$item->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Remove</button>
                        </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $items->links() }}

@endsection

@section('script')

@endsection