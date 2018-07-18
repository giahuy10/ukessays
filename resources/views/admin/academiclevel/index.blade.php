@extends('layouts.admin')

@section('header')
    Academic Levels
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{route('academiclevel.create')}}" class="btn btn-info">Create</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><a href="{{route('academiclevel.edit',['id'=>$item->id])}}">{{$item->name}}</a></td>
                    <td>
                        <form onsubmit="return confirm('Do you really want to remove this item?');" action="{{route('academiclevel.destroy',['academiclevel'=>$item->id])}}" method="POST">
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