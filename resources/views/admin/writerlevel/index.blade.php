@extends('layouts.admin')

@section('header')
    Writer Levels
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{route('writerlevel.create')}}" class="btn btn-info">Create</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Maximum Order</th>
                <th>Rated</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><a href="{{route('writerlevel.edit',['id'=>$item->id])}}">{{$item->name}}</a></td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->maximum_order}}</td>
                    <td>{{$item->rated}}</td>
                    <td>
                        <form onsubmit="return confirm('Do you really want to remove this item?');" action="{{route('writerlevel.destroy',['writerlevel'=>$item->id])}}" method="POST">
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